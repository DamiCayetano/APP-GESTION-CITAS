<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RulesQuotes;
use App\Models\Quotes;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function index()
    {
        $quotes = Quotes::all();
        return view('quotes.index', compact('quotes'));

        /* API opcional:
        return response()->json([
            'status' => true,
            'datos' => $quotes
        ], 200);
        */
    }

    public function create()
    {
        $patients = \App\Models\Patients::all();
        $doctors = \App\Models\Doctors::all(); // Cambia si el modelo tiene otro nombre

        return view('quotes.create', compact('patients', 'doctors'));
    }

    public function store(RulesQuotes $request)
    {
        Quotes::create($request->all());

        return redirect()->route('quotes.index')
            ->with('success', 'Cita creada correctamente.');

        /* API opcional:
        $quote = Quote::create($request->validated());
        return response()->json([
            'status' => true,
            'datos' => $quote
        ], 201);
        */
    }

    public function edit(Quotes $quote)
    {
        $patients = \App\Models\Patients::all();
        $doctors = \App\Models\Doctors::all();

        return view('quotes.edit', compact('quote', 'patients', 'doctors'));
    }


    public function update(Request $request, Quotes $quote)
    {
        $quote->update($request->all());

        return redirect()->route('quotes.index')
            ->with('success', 'Cita actualizada correctamente.');

        /* API opcional:
        return response()->json([
            'status' => true,
            'mensaje' => 'Cita actualizada',
            'datos' => $quote
        ], 200);
        */
    }

    public function destroy(Quotes $quote)
    {
        $quote->delete();

        return redirect()->route('quotes.index')
            ->with('success', 'Cita eliminada correctamente.');

        /* API opcional:
        return response()->json([
            'status' => true,
            'mensaje' => 'Cita eliminada'
        ], 200);
        */
    }
}
