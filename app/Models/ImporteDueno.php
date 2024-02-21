<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImporteDueno extends Model
{
    use HasFactory;

    protected $table = 'importe_duenos';

    protected $fillable = [
        'numero',
        'monto',
        'fecha',
        'venta',
        'metodo'
    ];

    public $timestamps = false;

    public function Venta(){
        return $this->hasOne(Venta::class,'id','venta');
    }
}
