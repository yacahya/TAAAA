<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function desa()
    {
        return $this->hasOne(Desa::class,'id','id_desa');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','id_user');
    }
    public function layanan()
    {
        return $this->hasOne(Layanan::class,'id','id_layanan');
    }
}
