<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tablero extends Model
{
    protected $fillable = ['titulo_tablero','descripcion_tablero','img_tablero'];
}
