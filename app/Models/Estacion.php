<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estacion extends Model
{
    use HasFactory;

    public function Lugarturistico(){
        return $this->hasMany('App\Models\Lugarturistico');
    }
}
