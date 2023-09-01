<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isian extends Model
{
    use HasFactory;
    protected $guarded= ['id'];

    public function form()
    {
        return $this->hasOne(DataForm::class,'id','id_form');
    }
}
