<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /*  */
    protected $table='Categorias';
    protected $fillable=['nombre', 'description', 'imagen'];
}