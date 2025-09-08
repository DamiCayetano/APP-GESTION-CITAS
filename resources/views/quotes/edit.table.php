@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cita</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>¡Oops! Hay errores en el formulario:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('quotes.update', $quote->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" value="{{ $quote->fecha }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="hora">Hora</label>
            <input type="time" name="hora" value="{{ $quote->hora }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="paciente_id">Paciente</label>
            <select name="paciente_id" class="form-control" required>
                <option value="">Seleccione un paciente</option>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}" {{ $quote->paciente_id == $patient->id ? 'selected' : '' }}>
                        {{ $patient->nombre }} {{ $patient->apellidos }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="medico_id">Médico</label>
            <select name="medico_id" class="form-control" required>
                <option value="">Seleccione un médico</option>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}" {{ $quote->medico_id == $doctor->id ? 'selected' : '' }}>
                        Dr. {{ $doctor->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="motivo">Motivo</label>
            <textarea name="motivo" class="form-control" rows="3" required>{{ $quote->motivo }}</textarea>
        </div>

        <div class="mb-3">
            <label for="estado">Estado</label>
            <select name="estado" class="form-control">
                <option value="pendiente" {{ $quote->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="confirmada" {{ $quote->estado == 'confirmada' ? 'selected' : '' }}>Confirmada</option>
                <option value="cancelada" {{ $quote->estado == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
            </select>
        </div>

        <button class="btn btn-success" type="submit">Actualizar</button>
        <a href="{{ route('quotes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
