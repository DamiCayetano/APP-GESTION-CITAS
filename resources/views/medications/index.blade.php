@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Medicamentos</h1>
    <a href="{{ route('medications.create') }}" class="btn btn-primary mb-3">Nuevo Medicamento</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dosis</th>
                <th>Frecuencia</th>
                <th>Duración</th>
                <th>Tratamiento</th>
                <th>Poovedor</th>
                <th>Efectos secundarios</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($medications as $medication)
            <tr>
                <td>{{ $medication->id }}</td>
                <td>{{ $medication->nombre }}</td>
                <td>{{ $medication->dosis }}</td>
                <td>{{ $medication->frecuencia }}</td>
                <td>{{ $medication->duracion }}</td>
                <td>{{ $medication->tratamiento }}</td>
                <td>{{ $medication->proveedor }}</td>
                <td>{{ $medication->efectos_secundarios }}</td>
                
                <td>
                    <a href="{{ route('medications.edit',$medication->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('medications.destroy',$medication->id) }}" method="POST" style="display:inline-block;">
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
