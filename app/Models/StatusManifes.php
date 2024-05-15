<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusManifes extends Model
{
    use HasFactory;

    protected $fillable=['nama','keterangan'];

    public function mtc()
    {
        return $this->hasMany(MTC::class,'status_manifes_id','id');
    }
}
