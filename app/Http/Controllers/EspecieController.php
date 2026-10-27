<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especie;

class EspecieController extends Controller
{
    public function readAll()
    {
        return response()->json(Especie::all());
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'nombre_comun'          => 'required|string',
            'nombre_cientifico'    => 'nullable|string',
            'habitat'              => 'nullable|string',
            'region'               => 'nullable|string',
            'profundidad'          => 'nullable|string',
            'estado_conservacion'  => 'nullable|string',
            'descripcion'          => 'nullable|string',
        ]);

        $especie = Especie::create($data);
        return response()->json($especie, 201);
    }

    public function readOne($id)
    {
        return response()->json(Especie::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $especie = Especie::findOrFail($id);

        $data = $request->validate([
            'nombre_comun'          => 'sometimes|required|string',
            'nombre_cientifico'    => 'nullable|string',
            'habitat'              => 'nullable|string',
            'region'               => 'nullable|string',
            'profundidad'          => 'nullable|string',
            'estado_conservacion'  => 'nullable|string',
            'descripcion'          => 'nullable|string',
        ]);

        $especie->update($data);
        return response()->json($especie);
    }

    public function delete($id)
    {
        $especie = Especie::findOrFail($id);
        $especie->delete();
        return response()->json(['message' => 'Especie eliminada']);
    }
}
