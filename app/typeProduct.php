<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeProduct extends Model
{
    protected $table='typeProduct';
    public function typeCheck(){       ////ทำให้ typeProduct table รู้จักค่า type_id 
        return $this->hasMany(typeProduct::class);
    }
    
}
