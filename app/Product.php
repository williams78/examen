<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = 'product';	 
   protected $fillable = [
        'p_nombre', 'p_imagen', 'p_modelo', 'p_presentacion', 'p_fabricante', 'p_estado', 'p_descripcion', 'p_costo',
        'p_venta', 'p_stock',
    ];
}
