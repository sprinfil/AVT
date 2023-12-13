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
        'norte',
        'sur', 
        'este',  
        'oeste',
        'estado',
        'zona',
    ];
}
