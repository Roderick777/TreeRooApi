<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lista;

class ListaController extends Controller
{

    public function index()
    {
        $lista = Lista::all();
        return $lista;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $Lista = Lista::create([
            'titulo_lista'          => $request->titulo_lista , 
            'descripcion_lista'     => '',
            'img_lista'             => '',
            'id_usuario'            => $request->id_usuario,
            'id_tablero'            => $request->id_tablero
            ]
        );
        echo json_encode($Lista); 
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
