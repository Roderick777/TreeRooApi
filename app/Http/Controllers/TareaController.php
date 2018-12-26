<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarea;

class TareaController extends Controller
{
    
    public function index()
    {
        $tarea = Tarea::all();
        return $tarea;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $Tarea = Tarea::create([
            'titulo_tarea'          => $request->titulo_tarea , 
            'descripcion_tarea'     => $request->descripcion_tarea,
            'img_tarea'             => '',
            'id_usuario'            => $request->id_usuario,
            'id_tablero'            => $request->id_tablero,
            'id_lista'              => $request->id_lista,
            'estado_tarea'          => $request->estado_tarea
            ]
        );
        echo json_encode($Tarea); 
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
