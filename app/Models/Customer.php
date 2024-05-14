<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama',
        'email',
        'no_telp',
        'wilayah_id',
        'alamat_detail',
        'tanggal_lahir',
        'tempat_lahir'
    ];


    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'wilayah_id','id');
    }
}
