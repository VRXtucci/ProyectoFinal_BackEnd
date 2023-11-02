<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{

    public function index()
    {
        $Roles = Roles::all();
        return $Roles;
    }

    public function show( $id)
    {
        $Roles = Roles::find($id);

        if (!$Roles) {
            return response()->json(['message' => 'Rol no encontrado'], 404);
        }

        return response()->json($Roles);

    }

    public function store(Request $request)
    {
        $request->validate([
            'roles' => 'required',
            'usuario_modificacion' => 'required',
            'usuario_creacion' => 'required',
            'fecha_modificacion' => 'required',
            'fecha_creacion' => 'required',
        ]);

        $Roles = new Roles();
        $Roles->roles = $request->input('roles');
        $Roles->usuario_modificacion = $request->input('usuario_modificacion');
        $Roles->usuario_creacion = $request->input('usuario_creacion');
        $Roles->fecha_modificacion = $request->input('fecha_modificacion');
        $Roles->fecha_creacion = $request->input('fecha_creacion');

        $Roles-> save();

        return response()->json(['message' => 'Rol creado con éxito'], 201);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'roles' => 'required',
            'usuario_modificacion' => 'required',
            'usuario_creacion' => 'required',
            'fecha_modificacion' => 'required',
            'fecha_creacion' => 'required',
        ]);

        $Roles = Roles::find($id);

        if (!$Roles) {
            return response()->json(['message' => 'Rol no encontrado'], 404);
        }

        $Roles->roles = $request->input('roles');
        $Roles->usuario_modificacion = $request->input('usuario_modificacion');
        $Roles->usuario_creacion = $request->input('usuario_creacion');
        $Roles->fecha_modificacion = $request->input('fecha_modificacion');
        $Roles->fecha_creacion = $request->input('fecha_creacion');

        $Roles->save();

        return response()->json(['message' => 'Rol actualizado con éxito'], 200);

    }

    public function destroy( $id)
    {
        $Roles = Roles::find($id);

        if (!$Roles) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        // Utiliza el método destroy para eliminar el usuario por su ID
        Roles::destroy($id);

        return response()->json(['message' => 'Usuario eliminado con éxito'], 200);
    }
}
