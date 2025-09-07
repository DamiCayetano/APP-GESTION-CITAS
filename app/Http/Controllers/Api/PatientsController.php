<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RulesPatients;
use App\Models\Patients;
use Database\Seeders\PatientsSeeder;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index(){

        $patients = Patients::all();
        return view('patients.index', compact('patients'));
        /*$patients = Patients::all();
        return response()->json([
            'status' => true,
            'datos' => $patients
        ],201);*/
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(RulesPatients $request){
        Patients::create($request->all());
        return redirect()->route('patients.index')->with('success','Paciente creado correctamente.');
        /*$patients  = Patients::create($request->validated());

        return response()->json([
            'status' => true,
            'datos' => $patients
        ],201);*/
    }

    public function edit(Patients $patient)
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
