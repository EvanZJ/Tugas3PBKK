<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\RekamMedis;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index(){
        return view('dokter',[
            'doctors' => dokter::all()
        ]);
    }
    public function content(dokter $doctor){
        return view('doctor',[
            "doctor" => $doctor
        ]);
    }
}
