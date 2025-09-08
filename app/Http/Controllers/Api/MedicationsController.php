<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RulesMedications;
use App\Models\Medications;
use Database\Seeders\MedicationsSeeder;
use Illuminate\Http\Request;

class MedicationsController extends Controller
{
    public function index(){

        $medications = Medications::all();
        return view('medications.index', compact('medications'));
        /*$patients = Patients::all();
        return response()->json([
            'status' => true,
            'datos' => $patients
        ],201);*/
    }

    public function create()
    {
        return view('medications.create');
    }

    public function store(RulesMedications $request){
        Medications::create($request->all());
        return redirect()->route('medications.index')->with('success','Medicamento creado correctamente.');
        /*$patients  = Patients::create($request->validated());

        return response()->json([
            'status' => true,
            'datos' => $patients
        ],201);*/
    }

    public function edit(Medications $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(/*string $id, Request $request*/ Request $request, Patients $patient){
        $patient->update($request->all());
        return redirect()->route('patients.index')->with('success','Paciente actualizado correctamente.');
    /* $patients = Patients::find($id);

    if (!$patients) {
        return response()->json([
            'status' => false,
            'mensaje' => 'Paciente no encontrado'
        ], 404);
    }

    // Actualizar con los datos recibidos
    $patients->update($request->all());

    return response()->json([
        'status' => true,
        'mensaje' => 'Paciente actualizado correctamente',
        'datos' => $patients
    ], 200);*/
    }

    public function destroy(/*string $id*/ Patients $patient){
        $patient->delete();
        return redirect()->route('patients.index')->with('success','Paciente eliminado correctamente.');
    /* $patients = Patients::find($id);

    if (!$patients) {
        return response()->json([
            'status' => false,
            'mensaje' => 'Paciente no encontrado'
        ], 404);
    }

    // Eliminar el alumno
    $patients->delete();

    return response()->json([
        'status' => true,
        'mensaje' => 'Paciente eliminado correctamente'
    ], 200);*/
    }
}
