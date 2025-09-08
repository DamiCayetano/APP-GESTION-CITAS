<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RulesTreatments;

use App\Models\Treatments;
use Illuminate\Http\Request;

class TreatmentsController extends Controller
{
    public function index()
    {
        $treatments = Treatments::all();
        return view('treatments.index', compact('treatments'));

        /* API opcional:
        return response()->json([
            'status' => true,
            'datos' => $treatments
        ], 200);
        */
    }

    public function create()
    {
        return view('treatments.create');
    }

    public function store(RulesTreatments $request)
    {
        Treatments::create($request->all());

        return redirect()->route('treatments.index')
            ->with('success', 'Tratamiento creado correctamente.');

        /* API opcional:
        $treatment = Treatment::create($request->validated());
        return response()->json([
            'status' => true,
            'datos' => $treatment
        ], 201);
        */
    }

    public function edit(Treatments $treatment)
    {
        return view('treatments.edit', compact('treatment'));
    }

    public function update(Request $request, Treatments $treatment)
    {
        $treatment->update($request->all());

        return redirect()->route('treatments.index')
            ->with('success', 'Tratamiento actualizado correctamente.');

        /* API opcional:
        return response()->json([
            'status' => true,
            'mensaje' => 'Tratamiento actualizado',
            'datos' => $treatment
        ], 200);
        */
    }

    public function destroy(Treatments $treatment)
    {
        $treatment->delete();

        return redirect()->route('treatments.index')
            ->with('success', 'Tratamiento eliminado correctamente.');

        /* API opcional:
        return response()->json([
            'status' => true,
            'mensaje' => 'Tratamiento eliminado'
        ], 200);
        */
    }
}
