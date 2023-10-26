<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public function nombreCompleto(){
        return $this->nombre." ".$this->apellido_1." ".$this->apellido_2;
    }
}
