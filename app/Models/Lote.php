<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'lote',
        'manzana',
        'catastral',
        'superficie',
        'precio',
        'noreste',        
        'sureste',
        'suroeste',
        'noroeste',
        'norte',
        'sur', 
        'este',  
        'oeste',
        'estado',
        'zona',

        'colindancia_noreste_id',
        'colindancia_sureste_id',
        'colindancia_suroeste_id',
        'colindancia_noroeste_id',
        'colindancia_norte_id',
        'colindancia_sur_id',
        'colindancia_este_id',
        'colindancia_oeste_id',
    ];

    public function nombre_zona(){
        $zona = Zona::where('id',$this->zona)->first();
        return $zona->nombre;
    }
}
