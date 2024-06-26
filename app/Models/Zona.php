<?php

namespace App\Models;

use App\Models\Lote;
use App\Models\Venta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zona extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $fillable = [
        'nombre',
        'numero',
        'dueno_id',
        'antecedentes',
        "imagen_contrato",
        "imagen_general",
        "color",
    ];

    public function dueno(){
        return $this->belongsTo(Persona::class);
    }

    public function lotes(){
        return $this->hasMany(Lote::class, 'zona');
    }
    
    public function contratos(){
        return $this->hasMany(Venta::class, 'zona_id');
    }
}
