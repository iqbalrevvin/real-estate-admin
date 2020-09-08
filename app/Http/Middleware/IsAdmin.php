<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->id_cms_privileges == 1 OR auth()->user()->id_cms_privileges == 2){
            return $next($request);
        }
        // $user = User::whereIn('id_cms_privileges', [1,2])->first();
        // if($user)

        return $response = response()->json([
            'success' => false,
            'message' => 'Anda Tidak Memiliki Hak Akses',
        ], 401);
    }
}
