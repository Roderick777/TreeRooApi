<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = ['titulo_tarea','descripcion_tarea','img_tarea', 'id_usuario', 'id_tablero', 'id_lista', 'estado_tarea'];
}
