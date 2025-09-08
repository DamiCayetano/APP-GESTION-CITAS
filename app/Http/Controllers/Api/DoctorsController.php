<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RulesDoctors;
use App\Models\Doctors;
use Database\Seeders\DoctorsSeeder;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index(){

        $doctors = Doctors::all();
        return view('doctors.index', compact('doctors'));
        /*$patients = Patients::all();
        return response()->json([
            'status' => true,
            'datos' => $patients
        ],201);*/
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(RulesDoctors $request){
        Doctors::create($request->all());
        return redirect()->route('doctors.index')->with('success','Doctor creado correctamente.');
        /*$patients  = Patients::create($request->validated());

        return response()->json([
            'status' => true,
            'datos' => $patients
        ],201);*/
    }

    public function edit(Doctors $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    public function update(/*string $id, Request $request*/ Request $request, Doctors $patient){
        $doctor->update($request->all());
        return redirect()->route('doctors.index')->with('success','Doctor actualizado correctamente.');
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

    public function destroy(/*string $id*/ Doctors $patient){
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success','Doctor eliminado correctamente.');
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