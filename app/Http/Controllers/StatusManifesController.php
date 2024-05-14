<?php

namespace App\Http\Controllers;

use App\Models\StatusManifes;
use Illuminate\Http\Request;

class StatusManifesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('statusmanifes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('statusmanifes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|unique:status_manifes,nama,id',
            'keterangan'=>'required|unique:status_manifes,keterangan,id'
        ],[
            'nama.required'=>'Silahkan Masukkan Nama Status',
            'keterangan.required'=>'Silahkan Masukkan Keterangan Status',
            'nama.unique'=>'Nama Status Telah Ditambahkan Sebelumnya',
            'keterangan.unique'=>'Keterangan Status Telah Ditambahkan Sebelumnya'
        ]);

        StatusManifes::create($request->all());

        return redirect()->route('statusmanifes.index')->with('success','Sukses Menambah Data Manifes Baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(StatusManifes $statusManifes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StatusManifes $statusmanifes)
    {
        return view('statusmanifes.edit',compact('statusmanifes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StatusManifes $statusmanifes)
    {
        $request->validate([
            'nama'=>'required|unique:status_manifes,nama,id'.$statusmanifes->id,
            'keterangan'=>'required|unique:status_manifes,keterangan,id'.$statusmanifes->id
        ],[
            'nama.required'=>'Silahkan Masukkan Nama Status',
            'keterangan.required'=>'Silahkan Masukkan Keterangan Status',
            'nama.unique'=>'Nama Status Telah Ditambahkan Sebelumnya',
            'keterangan.unique'=>'Keterangan Status Telah Ditambahkan Sebelumnya'
        ]);

        StatusManifes::where('id',$statusmanifes->id)
        ->update($request->except('_token','_method'));

        return redirect()->route('statusmanifes.index')->with('success','Sukses Mengubah Data Manifes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StatusManifes $statusmanifes)
    {
        $statusmanifes->delete();

        return rwdirect()->route('statusmanifes.index')->with('success','Sukses Menghapus Data Manifes');
    }
}
