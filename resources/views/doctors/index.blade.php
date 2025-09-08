@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Doctores </h1>
    <a href="{{ route('doctors.create') }}" class="btn btn-primary mb-3">Nuevo doctor</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Especialidad</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
            <tr>
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->nombre }}</td>
                <td>{{ $doctor->apellidos }}</td>
                <td>{{ $doctor->especialidad }}</td>
                <td>{{ $doctor->telefono }}</td>
                <td>
                    <a href="{{ route('doctors.edit',$doctor->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('doctors.destroy',$doctor->id) }}" method="POST" style="display:inline-block;">
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
