<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table="productos";
    protected $primaryKey="idproducto";
    public $timestamps=true;

    const CREATED_AT = 'fecha';

    //protected $guarded=[];
    protected $fillable=['nombreproducto','stockproducto','precioproducto',
'idusuario'];

    public function usuario(){
        return $this->belongsTo('App\User','idusuario');
    }
}
