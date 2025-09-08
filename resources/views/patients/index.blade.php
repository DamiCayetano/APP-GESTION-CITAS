@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Pacientes</h1>
    <a href="{{ route('patients.create') }}" class="btn btn-primary mb-3">Nuevo Paciente</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Tipo Sangre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->nombre }}</td>
                <td>{{ $patient->apellidos }}</td>
                <td>{{ $patient->telefono }}</td>
                <td>{{ $patient->tipo_sangre }}</td>
                <td>
                    <a href="{{ route('patients.edit',$patient->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('patients.destroy',$patient->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
