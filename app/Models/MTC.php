<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MTC extends Model
{
    use HasFactory;

    protected $table='mtc';

    protected $fillable=[
        'tanggal_update',
        'status_manifes_id',
        'pesanan_mencargo_id',
        'vendor_id',
        'tanggal_jalan',
        'estimasi',
        'image',
        'penerima'
    ];

    public function statusmanifes()
    {
        return $this->belongsTo(StatusManifes::class,'status_manifes_id','id');
    }

    public function pesananmencargo()
    {
        return $this->belongsTo(PesananMenCargo::class,'pesanan_mencargo_id','id');
    }


    public function vendor()
    {
        return $this->belongsTo(Vendor::class,'vendor_id','id');
    }
}
