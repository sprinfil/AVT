<?php

namespace App\Models;

use App\Models\Importe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Persona;

class Venta extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function Comprador(){
        return $this->hasOne(Persona::class,'id','comprador');
    }

    public function CompradorNombre():string {
        if ($this->Comprador) {
            return $this->Comprador->nombre . ' ' . $this->Comprador->apellido_1 . ' ' . $this->Comprador->apellido_2;
        }
        return 'Sin Seleccionar'; // O puedes retornar cualquier otro valor por defecto
    }

    public function Aval(){
        return $this->hasOne(Persona::class,'id','aval');
    }
    public function Vendedor(){
        return $this->hasOne(Persona::class,'id','vendedor');
    }
    public function VendedorNombre():string {
        if ($this->Vendedor) {
            return $this->Vendedor->nombre . ' ' . $this->Vendedor->apellido_1 . ' ' . $this->Vendedor->apellido_2;
        }
        return 'Sin Seleccionar'; // O puedes retornar cualquier otro valor por defecto
    }
    public function Lote(){
        return $this->hasOne(Lote::class,'id','lote');
    }

    public function Zona(){
        return $this->hasOne(Zona::class,'id','zona_id');
    }

    public function proximo_cobro(){
        return Importe::where('venta',$this->id)
        ->where('numero','!=',0)
        ->where('monto','>',0)->first();
    }

    public function Importes(){
        return $this->hasMany(Importe::class, 'venta', 'id');
    }
}
