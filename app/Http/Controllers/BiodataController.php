<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function input(){
        return view('input');
    }

    public function proceed(Request $request){
        $messagesError = [
            'required' => ':attribute must be filled!!',
            'min' => ':attribute must be filled minimum :min character!!!',
            'max' => ':attribute must be filled maximum :max character!!!',
            'numeric' => ':attribute must be filled with number only!!!',
            'alpha_dash' => ':attribute must be filled with alphanumeric only'
        ];
        $this->validate($request,[
            'name' => 'required',
            'dokter' => 'required',
            'status' => 'required',
            'suhu' => 'required|numeric|between:35.0, 45.5',
            'picture' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ],$messagesError); 
        $imageName = $request->picture->getClientOriginalName();
        $request->picture->move(public_path(), $imageName);
        $request->session()->flash('successMsg','Saved succesfully!'); 
        return view('proceed')->with('data', $request)
                              ->with('successMsg', 'Data has been successfully submitted!')
                              ->with('imageName', $imageName);
    }
}
