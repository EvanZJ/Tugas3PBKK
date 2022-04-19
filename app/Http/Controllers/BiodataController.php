<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\pasien;
use App\Models\RekamMedis;
use Illuminate\Http\Request;
use Faker\Generator;
use Illuminate\Container\Container;

class BiodataController extends Controller
{
    public function input(){
        $doctors = dokter::all();
        $patients = pasien::all();
        return view('input',[
            'doctors' => $doctors,
            'patients' => $patients
        ]);
    }
    public function store(Request $request){
        $messagesError = [
            'required' => ':attribute must be filled!!',
            'min' => ':attribute must be filled minimum :min character!!!',
            'max' => ':attribute must be filled maximum :max character!!!',
            'numeric' => ':attribute must be filled with number only!!!',
            'alpha_dash' => ':attribute must be filled with alphanumeric only'
        ];
        $faker = Container::getInstance()->make(Generator::class);
        $request->request->add(['slug' => $faker->slug()]);
        $validatedData = $request->validate([
            'dokter_id' => 'required',
            'pasien_id' => 'required',
            'slug' => 'required',
            'status' => 'required',
            'suhu' => 'required|numeric|between:35.0, 45.5'
        ],$messagesError);
        RekamMedis::create($validatedData);
        return redirect()->route('rekammedis')->with('tambah_data', 'Penambahan Pengguna berhasil');
    }
    public function edit($id)
    {
        $data = RekamMedis::where('id', $id)->first();
        $doctors = dokter::all();
        $patients = pasien::all();
        return view('edit-data', [
            'data' => $data,
            'doctors' => $doctors,
            'patients' => $patients
        ]); 
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'dokter_id' => 'required',
            'pasien_id' => 'required',
            'slug' => '',
            'status' => 'required',
            'suhu' => 'required|numeric|between:35.0, 45.5'
        ]);
        $pengumuman = RekamMedis::findOrFail($id);
        $pengumuman->update($validatedData);
        return redirect()->route('rekammedis')->with('edit_data', 'Pengeditan Data berhasil');
    }
    public function destroy($id)
    {
        $pengumuman = RekamMedis::findOrFail($id);
        $pengumuman->delete();
		return redirect()->route('rekammedis')->with('hapus_data', 'Penghapusan data berhasil');
    }
}
