<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vendor.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_wilayah=Wilayah::get();
        return view('vendor.create',compact('data_wilayah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama'=>'required|unique:vendors,nama,',
            'penanggung_jawab'=>'required',
            'bank'=>'required',
            'no_rekening'=>'required',
            'no_telp'=>'required',
            'wilayah_id'=>'required',
            'alamat'=>'required',
            'harga'=>"required"
        ],[
            'nama.required'=>'Silahkan Isi Nama Vendor',
            'nama.unique'=>'Nama Vendor Ini Sudah Ditambahkan Sebelumnya',
            'penanggung_jawab.required'=>'Silahkan Isi Nama Penanggung Jawab',
            'bank.required'=>'Silahkan Isi Nama Bank',
            'no_rekening.required'=>'Silahkan Isi Nomor Rekening',
            'no_telp.required'=>'Silahkan Isi Nomor Telepon',
            'wilayah_id.required'=>'Silahkan Pilih Wilayah Vendor',
            'alamat.required'=>'Silahkan Isi Alamat',
            'harga.required'=>'Silahkan Isi Harga'
        ]);

        Vendor::create($request->all());

        return redirect()->route('datavendor.index')->with('success',"Sukses Menambahkan Data Vendor");
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $datavendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $datavendor)
    {
        $data_wilayah=Wilayah::get();
        return view('datavendor.edit',compact('data_wilayah','vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendor $datavendor)
    {
        $request->validate([
            'nama'=>'required|unique:vendors,nama,id'.$datavendor->id,
            'penanggung_jawab'=>'required',
            'bank'=>'required',
            'no_rekening'=>'required',
            'no_telp'=>'required',
            'wilayah_id'=>'required',
            'alamat'=>'required',
            'harga'=>"required"
        ],[
            'nama.required'=>'Silahkan Isi Nama Vendor',
            'nama.unique'=>'Nama Vendor Ini Sudah Ditambahkan Sebelumnya',
            'penanggung_jawab.required'=>'Silahkan Isi Nama Penanggung Jawab',
            'bank.required'=>'Silahkan Isi Nama Bank',
            'no_rekening.required'=>'Silahkan Isi Nomor Rekening',
            'no_telp.required'=>'Silahkan Isi Nomor Telepon',
            'wilayah_id.required'=>'Silahkan Pilih Wilayah Vendor',
            'alamat.required'=>'Silahkan Isi Alamat',
            'harga.required'=>'Silahkan Isi Harga'
        ]);

        Vendor::where('id',$datavendor->id)->update($request->except('_method','_token'));

        return redirect()->route('datavendor.index')->with('success',"Sukses Mengubah Data Vendor");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $datavendor)
    {
        $datavendor->delete();
        return redirect()->route('datavendor.index')->with('success',"Sukses menghapus Data Vendor");
    }
}
