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

    public function Zona(){
        return $this->hasOne(Zona::class,'id','zona');
    }
    public function nombre_zona(){
        $zona = Zona::where('id',$this->zona)->first();
        return $zona->nombre;
    }

    /*
        public function colindancia_norte(){
        return $this->hasOne(Lote::class,'id','colindancia_norte_id');
    }
    public function colindancia_sur(){
        return $this->hasOne(Lote::class,'id','colindancia_sur_id');
    }
    public function colindancia_este(){
        return $this->hasOne(Lote::class,'id','colindancia_este_id');
    }
    public function colindancia_oeste(){
        return $this->hasOne(Lote::class,'id','colindancia_oeste_id');
    }
    public function colindancia_noreste(){
        return $this->hasOne(Lote::class,'id','colindancia_noreste_id');
    }
    public function colindancia_sureste(){
        return $this->hasOne(Lote::class,'id','colindancia_sureste_id');
    }
    public function colindancia_suroeste(){
        return $this->hasOne(Lote::class,'id','colindancia_suroeste_id');
    }
    public function colindancia_noroeste(){
        return $this->hasOne(Lote::class,'id','colindancia_noroeste_id');
    }
    */

}
