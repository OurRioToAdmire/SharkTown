<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiburon;

class TiburonController extends Controller
{
    public function readAll()
    {
        return response()->json(Tiburon::with('especie')->get());
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'nombre'  => 'nullable|string',
            'especie_id'     => 'required|exists:especies,id',
            'largo_m'        => 'nullable|numeric',
            'peso_kg'        => 'nullable|numeric',
            'notas'          => 'nullable|string',
        ]);

        $tiburon = Tiburon::create($data);
        return response()->json($tiburon, 201);
    }

    public function readOne($id)
    {
        return response()->json(Tiburon::with('especie')->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $tiburon = Tiburon::findOrFail($id);

        $data = $request->validate([
            'nombre'  => 'nullable|string',
            'especie_id'     => 'sometimes|required|exists:especies,id',
            'largo_m'        => 'nullable|numeric',
            'peso_kg'        => 'nullable|numeric',
            'notas'          => 'nullable|string',
        ]);

        $tiburon->update($data);
        return response()->json($tiburon);
    }

    public function delete($id)
    {
        $tiburon = Tiburon::findOrFail($id);
        $tiburon->delete();
        return response()->json(['message' => 'Tiburón eliminado']);
    }
}
