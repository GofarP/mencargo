<?php

namespace App\Http\Controllers;

use App\Models\TingkatanWilayah;
use Illuminate\Http\Request;

class TingkatanWilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tingkatanwilayah.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tingkatanwilayah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|unique:tingkatan_wilayahs,nama'
        ],[
            'nama.required'=>'Silahkan Masukkan Nama Tingkatan Wilayah',
            'nama.unique'=>'Tingkatan Wilayah Ini Sudah Ditambahkan Sebelumnya'
        ]);

        TingkatanWilayah::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('tingkatanwilayah.index')->with('success',"Sukses Menambah Data Tingkatan Wilayah");
    }

    /**
     * Display the specified resource.
     */
    public function show(TingkatanWilayah $tingkatanWilayah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TingkatanWilayah $tingkatanwilayah)
    {
        return view('tingkatanwilayah.edit',compact('tingkatanwilayah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TingkatanWilayah $tingkatanwilayah)
    {
        $request->validate([
            'nama'=>'required|unique:tingkatan_wilayahs,nama,'.$tingkatanwilayah->id
        ],[
            'nama.required'=>'Silahkan Masukkan Nama Tingkatan Wilayah',
            'nama.unique'=>'Tingkatan Wilayah Ini Sudah Ditambahkan Sebelumnya'
        ]);


        TingkatanWilayah::where('id',$request->id)->update(['nama'=>$request->nama]);

        return redirect()->route('tingkatanwilayah.index')->with('success',"Sukses Mengubah Data Tingkatan Wilayah");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TingkatanWilayah $tingkatanwilayah)
    {
        $tingkatanwilayah->delete();
        return redirect()->route('tingkatanwilayah.index')->with('success',"Sukses Menghapus Data Tingkatan Wilayah");
    }
}
