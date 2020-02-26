<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{

   
    protected $fillable = [
        'nombre', 'pais','division','continente','numero_equipos'
    ];

}
