<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogPengajuan extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function layanan()
    {
        return $this->hasOne(Pengajuan::class,'id','id_pengajuan');
    }
    public function userPemohon()
    {
        return $this->hasOne(User::class,'id','id_user_pemohon');
    }
    public function userProses()
    {
        return $this->hasOne(User::class,'id','id_user_proses');
    }
}
