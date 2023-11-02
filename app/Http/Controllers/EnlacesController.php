<?php

namespace App\Http\Controllers;

use App\Models\Enlaces;
use Illuminate\Http\Request;

class EnlacesController extends Controller
{

    public function index()
    {
        $Enlaces = Enlaces::all();
        return $Enlaces;
    }

    public function show( $id)
    {
        $Enlaces = Enlaces::find($id);

        if (!$Enlaces) {
            return response()->json(['message' => 'Enlace no encontrado'], 404);
        }

        return response()->json($Enlaces);
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required',
        ]);
        
        $Enlaces = new Enlaces();
        $Enlaces->descripcion = $request->input('descripcion');

        $Enlaces-> save();

        return response()->json(['message' => 'Enlace creado con éxito'], 201);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'descripcion' => 'required',
        ]);

        $Enlaces = Enlaces::find($id);

        if (!$Enlaces) {
            return response()->json(['message' => 'Enlace no encontrado'], 404);
        }

        $Enlaces->descripcion = $request->input('descripcion');


        $Enlaces-> save();
        
        return response()->json(['message' => 'Enlace actualizado con éxito'], 200);

    }

    public function destroy( $id)
    {
        $Enlaces = Enlaces::find($id);

        if (!$Enlaces) {
            return response()->json(['message' => 'Enlace no encontrado'], 404);
        }

        // Utiliza el método destroy para eliminar el usuario por su ID
        Enlaces::destroy($id);

        return response()->json(['message' => 'Enlace eliminado con éxito'], 200);
    }
}
