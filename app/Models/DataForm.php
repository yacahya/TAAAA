<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataForm extends Model
{
    use HasFactory;
    protected $guarded= ['id'];

    public function layanan()
    {
        return $this->hasOne(Layanan::class, 'id',"id_layanan");
    }
}
