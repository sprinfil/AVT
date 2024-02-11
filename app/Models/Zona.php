<?php

namespace App\Models;

use App\Models\Lote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zona extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $fillable = [
        'nombre',
        'dueno_id',
        'antecedentes'
    ];

    public function dueno(){
        return $this->belongsTo(Persona::class);
    }

    public function lotes(){
        return $this->hasMany(Lote::class, 'zona');
    }
}
