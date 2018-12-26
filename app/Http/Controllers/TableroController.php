<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tablero;

class TableroController extends Controller
{

    public function index()
    {
        $tablero = Tablero::all();
        return $tablero;
    }

   
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $Tablero = Tablero::create([
            'titulo_tablero'        => $request->titulo_tablero , 
            'descripcion_tablero'   => '',
            'img_tablero'           => '',
            'usuario_id'            => $request->usuarioId]
        );
        echo json_encode($Tablero); 
    }

   
    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

   
    public function update(Request $request, $id)
    {
        
    }

   
    public function destroy($id)
    {
        
    }
}
