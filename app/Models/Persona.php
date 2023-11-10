<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        //informacion personal
        'nombre',
        'apellido_1',
        'apellido_2',
        'sexo',
        'fecha_nac',
        
        //lugar de nacimiento
        'estado',
        'municipio',
        'ciudad_nac',
        'pais',

        'nacionalidad',
        'estado_civil',
        'curp',
        'rfc',
        'ine',
        'ocupacion',

        //direccion
        'calle',
        'numero_interior',
        'numero_exterior',
        'colonia_direccion',
        'codigo_postal',
        'estado_direccion',
        'municipio_direccion',
        'ciudad',
        'pais_direccion',

        //contacto
        'celular',
        'telefono',
        'correo',

        //referencias
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
