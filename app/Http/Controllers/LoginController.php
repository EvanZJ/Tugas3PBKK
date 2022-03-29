<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function logins(){
        return view("login", [
            'title' => 'Login'
        ]);
    }
}
