<?php

namespace App\Models;

use App\Models\Importe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venta extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function Comprador(){
        return $this->hasOne(Persona::class,'id','comprador');
    }
    public function Aval(){
        return $this->hasOne(Persona::class,'id','aval');
    }
    public function Vendedor(){
        return $this->hasOne(Persona::class,'id','vendedor');
    }
    public function Lote(){
        return $this->hasOne(Lote::class,'id','lote');
    }

    public function Zona(){
        return $this->hasOne(Zona::class,'id','zona_id');
    }

    public function proximo_cobro(){
        return Importe::where('venta',$this->id)
        ->where('monto','>',0)->first();
    }

}
