<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $fillable = ['titulo_lista','descripcion_lista','img_lista', 'id_usuario', 'id_tablero'];

}
