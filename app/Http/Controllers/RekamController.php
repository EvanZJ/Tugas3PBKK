<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use Illuminate\Http\Request;

class RekamController extends Controller
{
    public function index(){
        return view('contents',[
            'rekammedis' => RekamMedis::all()
        ]);
    }
    public function content(RekamMedis $rekammedis){
        return view('content',[
            "rekammedis" => $rekammedis
        ]);
    }
}
