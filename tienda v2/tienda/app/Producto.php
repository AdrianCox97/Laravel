<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'productos';
    protected $fillable = [
    	'nombre',
    	'descripcion',
    	'precio',
    	'categoria_id',
    	'imagen'
    ];

    

    public function etiquetasasociadas(){
        return $this->belongsToMany(Etiqueta::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}