<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function regis(){
        return view("register", [
            'title' => 'Register'
        ]);
    }
}
