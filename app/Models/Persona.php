<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido_1',
        'apellido_2',
        'estado',
        'ciudad',
        'celular',
        'telefono',
        'lugar_nac',
        'fecha_nac',
        'nacionalidad',
        'colonia',
        'direccion',
        'rfc',
        'estado_civil',
        'curp',
        'ine',
        'ocupacion',
        'referencia1_nombre',
        'referencia1_cel',
        'referencia1_parentesco',
        'referencia2_nombre',
        'referencia2_cel',
        'referencia2_parentesco',
        '_token',
    ];
    public function nombreCompleto(){
        return $this->nombre." ".$this->apellido_1." ".$this->apellido_2;
    }
}
