<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
   protected $table = 'proveedores';	 
   protected $primaryKey = 'id_codigo';
   protected $fillable = [
       'id_codigo','pr_nombre','pr_contacto','pr_calle','pr_ciudad','pr_estado','pr_codigo',
       'pr_pais','pr_correo','pr_telefono',
    ];
}
