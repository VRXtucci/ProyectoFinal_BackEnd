<?php

namespace App\Http\Controllers;

use App\Models\Paginas;
use Illuminate\Http\Request;

class PaginasController extends Controller
{

    public function index()
    {
        $Paginas = Paginas::all();
        return $Paginas;
    }

    public function show($id)
    {
        $Paginas = Paginas::find($id);

        if (!$Paginas) {
            return response()->json(['message' => 'Pagina no encontrado'], 404);
        }

        return response()->json($Paginas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required',
            'estado' => 'required',
        ]);

        $Paginas = new Paginas();
        $Paginas->url = $request->input('url');
        $Paginas->estado = $request->input('estado');

        $Paginas->save();

        return response()->json(['message' => 'Pagina creado con éxito'], 201);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'url' => 'required',
            'estado' => 'required',
        ]);

        $Paginas = Paginas::find($id);

        if (!$Paginas) {
            return response()->json(['message' => 'Pagina no encontrado'], 404);
        }

        $Paginas->url = $request->input('url');
        $Paginas->estado = $request->input('estado');

        $Paginas->save();

        return response()->json(['message' => 'Pagina actualizado con éxito'], 200);
    }

    public function destroy($id)
    {
        $Paginas = Paginas::find($id);

        if (!$Paginas) {
            return response()->json(['message' => 'Pagina no encontrado'], 404);
        }

        // Utiliza el método destroy para eliminar el usuario por su ID
        Paginas::destroy($id);

        return response()->json(['message' => 'Pagina eliminado con éxito'], 200);
    }
}
