<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananMenCargo extends Model
{
    use HasFactory;


    public $fillable=[
        'stt',
        'resi',
        'customer_id',
        'metode_pembayaran_id',
        'status_pembayaran_id',
        'harga_kg_barang',
        'harga_unit',
        'harga_diskon',
        'biaya_tambahan',
        'total_biaya',
        'uang_muka',
        'uang_sisa',
        'waktu_pesan',
        'tanggal_masuk',
        'jumlah_koli_awal',
        'jumlah_koli_packing',
        'volume',
        'berat',
        'dimensi',
        'unit',
        'kubikasi',
        'jalur',
        'daerah_asal',
        'daerah_tujuan',
        'nama_penerima',
        'notelp_penerima',
        'diterima_oleh',
        'instruksi',
        'catatan_barang',
        'alamat_detail_tujuan'
    ];

    public function mtc()
    {
        return $this->hasMany(MTC::class,'pesanan_mencargo_id','id');
    }

    public function daerahasal()
    {
        return $this->belongsTo(Wilayah::class,'daerah_asal','id');
    }

    public function daerahtujuan()
    {
        return $this->belongsTo(Wilayah::class,'daerah_tujuan','id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }

    public function statuspembayaran()
    {
        return $this->belongsTo(StatusPembayaran::class,'status_pembayaran_id','id');
    }
}
