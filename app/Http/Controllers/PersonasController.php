<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        $Personas = Personas::all();
        return $Personas;
    }

    public function show( $id)
    {
        $Personas = Personas::find($id);

        if (!$Personas) {
            return response()->json(['message' => 'Rol no encontrado'], 404);
        }

        return response()->json($Personas);
    }

    public function store(Request $request)
    {

        $request->validate([
            'primer_nombre' => 'required',
            'segundo_nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
        ]);

        $Personas = new Personas();
        $Personas->primer_nombre = $request->input('primer_nombre');
        $Personas->segundo_nombre = $request->input('segundo_nombre');
        $Personas->primer_apellido = $request->input('primer_apellido');
        $Personas->segundo_apellido = $request->input('segundo_apellido');

        $Personas-> save();

        return response()->json(['message' => 'Persona creado con éxito'], 201);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'primer_nombre' => 'required',
            'segundo_nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
        ]);

        $Personas = Personas::find($id);

        if (!$Personas) {
            return response()->json(['message' => 'Persona no encontrado'], 404);
        }

        $Personas->primer_nombre = $request->input('primer_nombre');
        $Personas->segundo_nombre = $request->input('segundo_nombre');
        $Personas->primer_apellido = $request->input('primer_apellido');
        $Personas->segundo_apellido = $request->input('segundo_apellido');

        $Personas-> save();
        
        return response()->json(['message' => 'Persona actualizado con éxito'], 200);

    }

    public function destroy( $id)
    {
        $Personas = Personas::find($id);

        if (!$Personas) {
            return response()->json(['message' => 'Personas no encontrado'], 404);
        }

        // Utiliza el método destroy para eliminar el usuario por su ID
        Personas::destroy($id);

        return response()->json(['message' => 'Persona eliminado con éxito'], 200);
    }
}
