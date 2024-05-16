<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\PesananMenCargo;
use App\Models\MetodePembayaran;
use App\Models\StatusPembayaran;
use App\Http\Controllers\Controller;

class PesananMenCargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pesananmencargo.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_customer = Customer::get();
        $data_metode_pembayaran=MetodePembayaran::get();
        $data_status_pembayaran = StatusPembayaran::get();
        $data_wilayah=Wilayah::get();
        return view('pesananmencargo.create',compact('data_customer','data_metode_pembayaran','data_status_pembayaran','data_wilayah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PesananMenCargo::create([
            'stt'=>$request->stt,
            'resi'=>$request->resi,
            'customer_id'=>$request->customer_id,
            'metode_pembayaran_id'=>$request->metode_pembayaran_id,
            'status_pembayaran_id'=>$request->status_pembayaran_id,
            'harga_kg_barang'=>$request->harga_kg_barang,
            'harga_unit'=>$request->harga_unit,
            'harga_diskon'=>$request->harga_diskon,
            'biaya_tambahan'=>$request->biaya_tambahan,
            'total_biaya'=>$request->total_biaya,
            'uang_muka'=>$request->uang_muka,
            'uang_sisa'=>$request->uang_sisa,
            'waktu_pesan'=>$request->waktu_pesan,
            'tanggal_masuk'=>$request->tanggal_masuk,
            'jumlah_koli_awal'=>$request->jumlah_koli_awal,
            'jumlah_koli_packing'=>$request->jumlah_koli_packing,
            'volume'=>$request->volume,
            'berat'=>$request->berat,
            'dimensi'=>$request->dimensi,
            'unit'=>$request->unit,
            'kubikasi'=>$request->kubikasi,
            'instruksi'=>$request->instruksi,
            'jalur'=>$request->jalur,
            'daerah_asal'=>$request->daerah_asal,
            'daerah_tujuan'=>$request->daerah_tujuan,
            'alamat_detail_tujuan'=>$request->alamat_detail_tujuan,
            'nama_penerima'=>$request->nama_penerima,
            'notelp_penerima'=>$request->notelp_penerima,
            'diterima_oleh'=>$request->diterima_oleh,
            'catatan_barang'=>$request->catatan_barang,
        ]);

        return redirect()->route('pesananmencargo.index')->with('success','Sukses Menambah Pesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(PesananMenCargo $pesananmencargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PesananMenCargo $pesananmencargo)
    {
        $data_customer = Customer::get();
        $data_metode_pembayaran=MetodePembayaran::get();
        $data_status_pembayaran = StatusPembayaran::get();
        $data_wilayah=Wilayah::get();
        return view('pesananmencargo.edit',compact('pesananmencargo','data_customer','data_metode_pembayaran','data_status_pembayaran','data_wilayah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PesananMenCargo $pesananmencargo)
    {
        PesananMenCargo::where('id',$pesananmencargo->id)->update([
            'stt'=>$request->stt,
            'resi'=>$request->resi,
            'customer_id'=>$request->customer_id,
            'metode_pembayaran_id'=>$request->metode_pembayaran_id,
            'status_pembayaran_id'=>$request->status_pembayaran_id,
            'harga_kg_barang'=>$request->harga_kg_barang,
            'harga_unit'=>$request->harga_unit,
            'harga_diskon'=>$request->harga_diskon,
            'biaya_tambahan'=>$request->biaya_tambahan,
            'total_biaya'=>$request->total_biaya,
            'uang_muka'=>$request->uang_muka,
            'uang_sisa'=>$request->uang_sisa,
            'waktu_pesan'=>$request->waktu_pesan,
            'tanggal_masuk'=>$request->tanggal_masuk,
            'jumlah_koli_awal'=>$request->jumlah_koli_awal,
            'jumlah_koli_packing'=>$request->jumlah_koli_packing,
            'volume'=>$request->volume,
            'berat'=>$request->berat,
            'dimensi'=>$request->dimensi,
            'unit'=>$request->unit,
            'kubikasi'=>$request->kubikasi,
            'instruksi'=>$request->instruksi,
            'jalur'=>$request->jalur,
            'daerah_asal'=>$request->daerah_asal,
            'daerah_tujuan'=>$request->daerah_tujuan,
            'alamat_detail_tujuan'=>$request->alamat_detail_tujuan,
            'nama_penerima'=>$request->nama_penerima,
            'notelp_penerima'=>$request->notelp_penerima,
            'diterima_oleh'=>$request->diterima_oleh,
            'catatan_barang'=>$request->catatan_barang,
        ]);

        return redirect()->route('pesananmencargo.index')->with('success','Sukses Mengubah Pesanan');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PesananMenCargo $pesananmencargo)
    {
        $pesananmencargo->delete();
        return redirect()->route('pesananmencargo.index')->with('success','Sukses Menghapus Pesanan');
    }
}
