<?php

namespace App\Http\Controllers;

use App\Models\TingkatanWilayah;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('wilayah.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tingkatan_wilayah=TingkatanWilayah::get();
        return view('wilayah.create',compact('tingkatan_wilayah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|unique:wilayahs,nama',
            'tingkatan_wilayah_id'=>'required'
        ],[
            'nama.required'=>'Masukkan Nama Wilayah',
            'nama.unique'=>'Nama Wilayah Ini Telah Digunakan Sebelumnya',
            'tingkatan_wilayah_id.required'=>'Silahkan Isi Nama Wilayah Anda'
        ]);

        Wilayah::create([
            'nama'=>$request->nama,
            'tingkatan_wilayah_id'=>$request->tingkatan_wilayah_id
        ]);

        return redirect()->route('datawilayah.index')->with('success',"Sukses Menambah Data Wilayah");

    }

    /**
     * Display the specified resource.
     */
    public function show(Wilayah $wilayah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wilayah $datawilayah)
    {
        $tingkatan_wilayah=TingkatanWilayah::get();
        return view('wilayah.edit',compact('datawilayah','tingkatan_wilayah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wilayah $datawilayah)
    {
        $request->validate([
            'nama'=>'required|unique:wilayahs,nama,'.$datawilayah->id,
            'tingkatan_wilayah_id'=>'required'
        ],[
            'nama.required'=>'Masukkan Nama Wilayah',
            'nama.unique'=>'Nama Wilayah Ini Telah Digunakan Sebelumnya',
            'tingkatan_wilayah_id.required'=>'Silahkan Isi Nama Wilayah Anda'
        ]);

        Wilayah::where('id',$datawilayah->id)->update([
            'nama'=>$request->nama,
            'tingkatan_wilayah_id'=>$request->tingkatan_wilayah_id
        ]);

        return redirect()->route('datawilayah.index')->with('success',"Sukses mengubah Data Wilayah");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wilayah $wilayah)
    {
        $wilayah->delete();
        return redirect()->route('datawilayah.index')->with('success',"Sukses menghapus Data Wilayah");
    }
}
