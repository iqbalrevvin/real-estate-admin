<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rumah;
use App\Agen;
use FeedReader;
use App\Rss;
use Jenssegers\Agent\Agent;

class SiteController extends Controller
{
    public function homepage()
    {
        $agent = new Agent();
        $rumah = Rumah::All();
        $agen = Agen::All();
        $title = 'Beranda';
        $data = [
            'title' => $title,
            'rumah' => $rumah,
            'agen' => $agen
        ];
        if($agent->isMobile()){
            return view('homepage',$data);
        }else{
            return redirect('admin');
        }
        
    }

    public function Homes()
    {
        $rumah = Rumah::All();
        $data = [
            'rumah' => $rumah,
        ];
        return view('rumah.list',$data);
    }

    public function Detail($id)
    {
        $rumah = Rumah::find($id);
        $data = [
            'id' => $id,
            'rumah' => $rumah,
        ];
        return view('rumah.detail',$data);
    }

    public function about()
    {
        $title = 'Tentang Papan Informasi Digital';
        $data = [
            'title' => $title,
        ];
        return view('frontend.about', $data);
    }
   
}
