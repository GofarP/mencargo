<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananMenCargo extends Model
{
    use HasFactory;


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
}
