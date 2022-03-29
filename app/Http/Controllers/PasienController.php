<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use App\Models\RekamMedis;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        return view('pasien', [
            'patients' => pasien::all()
        ]);
    }

    public function content(pasien $patient){
        return view('patient', [
            "patient" => $patient
        ]);
    }
}
