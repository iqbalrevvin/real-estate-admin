<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi;

class InformasiController extends Controller
{
    public function index()
    {
    	$informasi = Informasi::where('status', 'Publish')->limit(5);
    	
    }
}
