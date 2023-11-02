<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function index()
    {
        $Usuarios = Usuarios::all();
        return $Usuarios;
    }

    public function show( $id)
    {
        $Usuarios = Usuarios::find($id);

        if (!$Usuarios) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        return response()->json($Usuarios);
    }

    public function store(Request $request)
    {
        $request->validate([
            'contrasena' => 'required',
            'habilitado' => 'required',
            'fecha' => 'required',
        ]);

        $Usuarios = new Usuarios();
        $Usuarios->contrasena = $request->input('contrasena');
        $Usuarios->habilitado = $request->input('habilitado');
        $Usuarios->fecha = $request->input('fecha');

        $Usuarios-> save();

        return response()->json(['message' => 'Usuarios creado con éxito'], 201);

    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'contrasena' => 'required',
            'habilitado' => 'required',
            'fecha' => 'required',
        ]);

        $Usuarios = Usuarios::find($id);

        
        if (!$Usuarios) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $Usuarios->contrasena = $request->input('contrasena');
        $Usuarios->habilitado = $request->input('habilitado');
        $Usuarios->fecha = $request->input('fecha');

        $Usuarios-> save();
        
        return response()->json(['message' => 'Usuario actualizado con éxito'], 200);

    }

    public function destroy( $id)
    {
        $Usuarios = Usuarios::find($id);

        if (!$Usuarios) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        // Utiliza el método destroy para eliminar el usuario por su ID
        Usuarios::destroy($id);

        return response()->json(['message' => 'Usuario eliminado con éxito'], 200);
    }
}