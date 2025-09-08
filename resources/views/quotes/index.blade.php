@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Citas</h1>
    <a href="{{ route('quotes.create') }}" class="btn btn-primary mb-3">Nueva Cita</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Paciente</th>
                <th>Médico</th>
                <th>Motivo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quotes as $quote)
            <tr>
                <td>{{ $quote->id }}</td>
                <td>{{ $quote->fecha }}</td>
                <td>{{ $quote->hora }}</td>
                <td>{{ $quote->paciente->nombre ?? 'N/A' }}</td>
                <td>{{ $quote->medico->nombre ?? 'N/A' }}</td>
                <td>{{ $quote->motivo }}</td>
                <td>{{ $quote->estado }}</td>
                <td>
                    <a href="{{ route('quotes.edit', $quote->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('quotes.destroy', $quote->id) }}" method="POST" style="display:inline-block;">
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
