<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valuaciones extends Model
{
    //
    protected $fillable = [
        'id',
    	'categoria',
        'subcategoria',
        'marca',
        'modelo',
        'version',
        'ano',
        'estado',
        'nuevo',
        'valor',
        'etapa',
        'valuador'

    ];
}
