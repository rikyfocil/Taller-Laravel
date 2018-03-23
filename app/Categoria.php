<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Categoria extends Model
{
    protected $guarded = [];


    public static function allAsIdValue()
    {
    	$categorias = Categoria::all();
    	$values = [];

    	foreach ($categorias as $categoria)
    		$values[$categoria->id] = $categoria->nombre;

    	return $values;
    }
}
