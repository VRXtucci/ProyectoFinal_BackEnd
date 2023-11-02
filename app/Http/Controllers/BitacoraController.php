<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{

    public function index()
    {
        $Bitacora = Bitacora::all();
        return $Bitacora;
    }

    public function show($id)
    {
        $Bitacora = Bitacora::find($id);

        if (!$Bitacora) {
            return response()->json(['message' => 'Bitacora no encontrado'], 404);
        }

        return response()->json($Bitacora);
    }

    public function store(Request $request)
    {

        $request->validate([
            'bitacora' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'navegador' => 'required',
            'SO' => 'required',
            'ip' => 'required',
        ]);

        $Bitacora = new Bitacora();
        $Bitacora->bitacora = $request->input('bitacora');
        $Bitacora->fecha = $request->input('fecha');
        $Bitacora->hora = $request->input('hora');
        $Bitacora->navegador = $request->input('navegador');
        $Bitacora->SO = $request->input('SO');
        $Bitacora->ip = $request->input('ip');

        $Bitacora->save();

        return response()->json(['message' => 'Bitacora creado con éxito'], 201);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'bitacora' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'navegador' => 'required',
            'SO' => 'required',
            'ip' => 'required',
        ]);

        $Bitacora = Bitacora::find($id);

        if (!$Bitacora) {
            return response()->json(['message' => 'Persona no encontrado'], 404);
        }

        $Bitacora->bitacora = $request->input('bitacora');
        $Bitacora->fecha = $request->input('fecha');
        $Bitacora->hora = $request->input('hora');
        $Bitacora->navegador = $request->input('navegador');
        $Bitacora->SO = $request->input('SO');
        $Bitacora->ip = $request->input('ip');

        $Bitacora->save();

        return response()->json(['message' => 'Persona actualizado con éxito'], 200);
    }

    public function destroy($id)
    {
        $Bitacora = Bitacora::find($id);

        if (!$Bitacora) {
            return response()->json(['message' => 'Bitacora no encontrado'], 404);
        }

        // Utiliza el método destroy para eliminar el usuario por su ID
        Bitacora::destroy($id);

        return response()->json(['message' => 'Bitacora eliminado con éxito'], 200);
    }
}
