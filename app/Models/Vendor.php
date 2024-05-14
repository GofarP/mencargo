<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama',
        'penanggung_jawab',
        'bank',
        'no_rekening',
        'no_telp',
        'wilayah_id',
        'alamat',
        'harga'
    ];


    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'wilayah_id','id');
    }
}
