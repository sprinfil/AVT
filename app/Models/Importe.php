<?php

namespace App\Models;

use App\Models\Venta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Importe extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function Venta(){
        return $this->hasOne(Venta::class,'id','venta');
    }
}
