<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPembayaran extends Model
{
    use HasFactory;
    protected $fillable=['nama'];

    public function pesananmencargo()
    {
        return $this->hasMany(PesananMenCargo::class,'status_pembayaran_id','id');
    }
}
