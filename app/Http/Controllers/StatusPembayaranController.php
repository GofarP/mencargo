<?php

namespace App\Http\Controllers;

use App\Models\StatusPembayaran;
use Illuminate\Http\Request;

class StatusPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('statuspembayaran.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('statuspembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|unique:status_pembayarans,nama'
        ],[
            'nama.required'=>'Nama status pembayaran harus diisi',
            'nama.unique'=>'Nama status pembayaran sudah ditambahkan sebelumnya'
        ]);

        StatusPembayaran::create($request->all());

        return redirect()->route('statuspembayaran.index')->with('success','Sukses Menambah Status Pembayaran');
    }

    /**
     * Display the specified resource.
     */
    public function show(StatusPembayaran $statuspembayaran)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StatusPembayaran $statuspembayaran)
    {
        return view('statuspembayaran.edit',compact('statuspembayaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StatusPembayaran $statuspembayaran)
    {
        $request->validate([
            'nama'=>'required|unique:status_pembayarans,nama,'.$statuspembayaran->id
        ],[
            'nama.required'=>'Silahkan Masukkan Nama',
            'nama.unique'=>'Nama Ini Sudah Ditambahkan Sebelumnya'
        ]);

        StatusPembayaran::where('id',$statuspembayaran->id)->update($request->except('_token','_method'));

        return redirect()->route('statuspembayaran.index')->with('success','Sukses Mengubah Status Pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StatusPembayaran $statuspembayaran)
    {
        $statuspembayaran->delete();
        return redirect()->route('statuspembayaran.index')->with('success','Sukses Menghapus Status Pembayaran');

    }
}
