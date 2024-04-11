<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $dates = ['fecha'];


    public function venta(){
        return $this->hasOne(Venta::class,'id','venta_id');
    }
}
