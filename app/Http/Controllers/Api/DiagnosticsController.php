<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RulesDiagnostics;
use App\Models\Diagnostics;
use Illuminate\Http\Request;

class DiagnosticsController extends Controller
{
    public function index()
    {
        $diagnostics = Diagnostics::all();
        return view('diagnostics.index', compact('diagnostics'));

        /* API opcional:
        return response()->json([
            'status' => true,
            'datos' => $diagnostics
        ], 200);
        */
    }

    public function create()
    {
        return view('diagnostics.create');
    }

    public function store(RulesDiagnostics $request)
    {
        Diagnostics::create($request->validated());
        return redirect()->route('diagnostics.index')->with('success', 'Diagnóstico creado correctamente.');

        /* API opcional:
        $diagnostic = Diagnostic::create($request->validated());
        return response()->json([
            'status' => true,
            'datos' => $diagnostic
        ], 201);
        */
    }

    public function edit(Diagnostics $diagnostic)
    {
        return view('diagnostics.edit', compact('diagnostic'));
    }

    public function update(Request $request, Diagnostics $diagnostic)
    {
        $diagnostic->update($request->all());
        return redirect()->route('diagnostics.index')->with('success', 'Diagnóstico actualizado correctamente.');

        /* API opcional:
        return response()->json([
            'status' => true,
            'mensaje' => 'Diagnóstico actualizado correctamente',
            'datos' => $diagnostic
        ], 200);
        */
    }

    public function destroy(Diagnostics $diagnostic)
    {
        $diagnostic->delete();
        return redirect()->route('diagnostics.index')->with('success', 'Diagnóstico eliminado correctamente.');

        /* API opcional:
        return response()->json([
            'status' => true,
            'mensaje' => 'Diagnóstico eliminado correctamente'
        ], 200);
        */
    }
}



