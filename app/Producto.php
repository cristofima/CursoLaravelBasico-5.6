<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table="productos";
    protected $primaryKey="idproducto";
    public $timestamps=false;
    protected $guarded=[];

    public function usuario(){
        return $this->belongsTo('App\User','idusuario');
    }
}
