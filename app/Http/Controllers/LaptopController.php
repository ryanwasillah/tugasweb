<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index()
    {
    	$laptop= \App\Laptop::all();
    	return view('laptop.index',['laptop'=> $laptop]);
    }
    public function create(Request $request)
    {
    	$aturan = [
    		'merek'=> 'required',
    		'tipe' => 'required',
    		'jenis_prosesor' => 'required',
    		'ram' => 'required|numeric',
            'hardisk' => 'required|numeric',
            'harga' => 'required|numeric'
    	];
    	$pesan = [
    		'required' => 'Data wajib diisi !', 
    		'numeric' => 'Mohon isi dengan angka !',
    		// 'string'=> 'Mohon isi dengan huruf !'
    	];
    	$this->validate($request,$aturan,$pesan);
    	\App\Laptop::create([
    		'merek'=> $request->merek,
    		'tipe' => $request->tipe,
    		'jenis_prosesor' => $request->jenis_prosesor,
    		'ram' => $request->ram,
            'hardisk' => $request->hardisk,
            'harga' => $request->harga
    	]);

        
        return redirect('/laptop')->with('sukses','Data berhasil ditambahkan');
    }
    public function edit($id)
    {
    	$laptop = \App\Laptop::find($id);
    	return view('laptop/edit',['laptop'=> $laptop]);
    }
    public function update(Request $request,$id)
    {
        $aturan = [
            'merek'=> 'required',
            'tipe' => 'required',
            'jenis_prosesor' => 'required',
            'ram' => 'required|numeric',
            'hardisk' => 'required|numeric',
            'harga' => 'required|numeric'
        ];
        $pesan = [
            'required' => 'Data wajib diisi !', 
            'numeric' => 'Mohon isi dengan angka !',
            // 'string'=> 'Mohon isi dengan huruf !'
        ];
        $this->validate($request,$aturan,$pesan);
    	$laptop = \App\Laptop::find($id);
    	$laptop->update($request->all());
    	return redirect('/laptop')->with('sukses','Data berhasil diubah');
    }
    public function delete($id)
    {
    	$laptop = \App\Laptop::find($id);
    	$laptop->delete();
    	return redirect('/laptop')->with('sukses','Data berhasil dihapus');
    }

    public function tambah()
    {
        return view('laptop/tambah');
    }

 }
