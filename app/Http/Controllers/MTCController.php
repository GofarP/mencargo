<?php

namespace App\Http\Controllers;

use App\Models\MTC;
use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Models\StatusManifes;
use App\Models\PesananMenCargo;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class MTCController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mtc.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $status_manifes=StatusManifes::get();
        $pesanan_mencargo=PesananMenCargo::get();
        $vendor=Vendor::get();
        return view('mtc.create',compact('status_manifes','pesanan_mencargo','vendor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_mtc=[];
        $request->validate([
            'tanggal_update'=>'required',
            'status_manifes_id'=>'required',
            'pesanan_mencargo_id'=>'required',
            'vendor_id'=>'required',
        ],[
            'tanggal_update.required'=>'Silahkan Pilih Tanggal Update',
            'status_manifes_id.required'=>'Silahkan Pilih Status Manifes',
            'pesanan_mencargo_id.required'=>'Silahkan Pilih No Stt',
            'vendor_id.required'=>'Silahkan Pilih Vendor'
        ]);


        $data_mtc=[
            'tanggal_update'=>$request->tanggal_update,
            'status_manifes_id'=>$request->status_manifes_id,
            'pesanan_mencargo_id'=>$request->pesanan_mencargo_id,
            'vendor_id'=>$request->vendor_id,
            'tanggal_jalan'=>$request->tanggal_jalan,
            'estimasi'=>$request->estimasi,
            'penerima'=>$request->penerima,
        ];

        if($request->hasFile('image'))
        {
            $nama_image=uniqid(). '-' . $request->file('image')->getClientOriginalName();
            $tujuanupload='imagemtc';
            $file=$tujuanupload.'/'.$nama_image;

            $data_mtc['image']=$file;
        }


        Mtc::create($data_mtc);

        $request->file('image')->move($tujuanupload,$nama_image);

        return redirect()->route('mtc.index')->with('success','Sukses Menambah MTC');
    }

    /**
     * Display the specified resource.
     */
    public function show(MTC $mtc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MTC $mtc)
    {
        $status_manifes=StatusManifes::get();
        $pesanan_mencargo=PesananMenCargo::get();
        $pesanan_vendor=Vendor::get();
        return view('mtc.edit',compact('mtc','status_manifes','pesanan_mencargo','pesanan_vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MTC $mtc)
    {
        $request->validate([
            'tanggal_update'=>'required',
            'status_manifes_id'=>'required',
            'pesanan_mencargo_id'=>'required',
            'vendor_id'=>'required',
        ],[
            'tanggal_update.required'=>'Silahkan Pilih Tanggal Update',
            'status_manifes_id.required'=>'Silahkan Pilih Status Manifes',
            'pesanan_mencargo_id.required'=>'Silahkan Pilih No Stt',
            'vendor_id.required'=>'Silahkan Pilih Vendor'
        ]);

        if($request->hasFile('image'))
        {
            File::delete($mtc->image);

            $nama_image=uniqid(). '-' . $request->file('image')->getClientOriginalName();
            $tujuanupload='imagemtc';
            $file=$tujuanupload.'/'.$nama_image;
        }

        $data_mtc=[
            'tanggal_update'=>$request->tanggal_update,
            'status_manifes_id'=>$request->status_manifes_id,
            'pesanan_mencargo_id'=>$request->pesanan_mencargo_id,
            'vendor_id'=>$request->vendor_id,
            'tanggal_jalan'=>$request->tanggal_jalan,
            'estimasi'=>$request->estimasi,
            'penerima'=>$request->penerima,
            'image'=>$file,
        ];

        Mtc::where('id',$mtc->id)->update($data_mtc);

        $request->file('image')->move($tujuanupload,$nama_image);

        return redirect()->route('mtc.index')->with('success','Sukses Menambah MTC');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MTC $mtc)
    {
        File::delete($mtc->image);
        $mtc->delete();
        return redirect()->route('mtc.index')->with('success','Sukses Menghapus MTC');
    }
}
