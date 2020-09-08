<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\User;

class AuthController extends Controller
{
    public function __construct(){
    	// $this->middleware('auth:api',['except' => ['login', 'refresh']]);
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        // $user = User::where('email', $username)->orWhere("phone", $username)->first();
        $user = User::where('email', $username)->first();

        $credentials = ['email' => $user->email, 'password' => $password]; 

    	if(!$token = auth()->attempt($credentials)){
    		// return response()->json(['error' => 'Unautorized'], 401);
    		$response = response()->json([
                'status' => 'failed',
                'message' => 'Pengguna tidak ditemukan atau informasi akun salah.',
                'data' => [
                    'Unautorized' => 'Username atau password salah!',
                ]
            ], 401);
    	}else{
    		$response = response()->json([
	            'success' => 'success',
	            'message' => 'Login Berhasil',
	            'data' => [
	                'user' => $user,
	                'token' => $token
	            ]
	        ], 201);
    	}

    	return $response;

    	// return $this->respondWithToken($token);
    }

     /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
    	$this->middleware('auth:api',['except' => ['login', 'refresh']]);
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }


    public function register(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'email|required|unique:cms_users',
            'phone' => 'numeric|max:999999999999999|min:999999999|unique:cms_users',
            'password' => 'required|min:6',
            'id_cms_privileges' => 'required',
        ],[
            'phone.max' => 'Maksimal No. Hp 15 Digit',
            'phone.min' => 'Minimal No. Hp 9 Digit',
            'phone.unique' => 'No. Telp Sudah Ada'
        ]);

        $name       		= $request->name;
        $email      		= $request->email;
        $phone      		= $request->phone;
        $password   		= Hash::make($request->password);
        $id_cms_privileges 	= $request->id_cms_privileges;

        if($validator->passes()){
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'password' => $password,
                'id_cms_privileges' => $id_cms_privileges
            ]);
            $response =  response()->json([
                            'success' => true,
                            'message' => 'Registrasi Berhasil',
                            'data' => $user
                        ], 201);

        }else{
            $response =  response()->json([
                            'success' => false,
                            'message' => 'Registrasi Gagal',
                            'data' => $validator->errors()->all()
                        ], 401);
        };

        return $response;
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
	 */

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

}
