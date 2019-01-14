<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticuloMovimiento extends Model
{
    //
	protected $fillable = ['id_articulo', 'salida', 'entrada', 'descripcion'];
}
