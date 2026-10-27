<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Observacion;

class ObservacionController extends Controller
{
    public function readAll()
    {
        return response()->json(Observacion::with('tiburon')->get());
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'tiburon_id'         => 'required|exists:tiburones,id',
            'fecha'             => 'nullable|date',
            'condiciones_mar'   => 'nullable|string',
            'tipo_avistamiento' => 'nullable|string',
            'notas'             => 'nullable|string',
        ]);

        $obs = Observacion::create($data);
        return response()->json($obs, 201);
    }

    public function readOne($id)
    {
        return response()->json(Observacion::with('tiburon')->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $obs = Observacion::findOrFail($id);

        $data = $request->validate([
            'tiburon_id'         => 'sometimes|required|exists:tiburones,id',
            'fecha'             => 'nullable|date',
            'condiciones_mar'   => 'nullable|string',
            'tipo_avistamiento' => 'nullable|string',
            'notas'             => 'nullable|string',
        ]);

        $obs->update($data);
        return response()->json($obs);
    }

    public function delete($id)
    {
        $obs = Observacion::findOrFail($id);
        $obs->delete();
        return response()->json(['message' => 'Observacion eliminada']);
    }
}
