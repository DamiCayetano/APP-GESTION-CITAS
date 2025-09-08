@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nueva Cita</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>¡Oops! Algo salió mal.</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('quotes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ old('fecha') }}" required>
        </div>

        <div class="mb-3">
            <label for="hora" class="form-label">Hora</label>
            <input type="time" name="hora" class="form-control" value="{{ old('hora') }}" required>
        </div>

        <div class="mb-3">
            <label for="paciente_id" class="form-label">Paciente</label>
            <select name="paciente_id" class="form-control" required>
                <option value="">Seleccione un paciente</option>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}" {{ old('paciente_id') == $patient->id ? 'selected' : '' }}>
                        {{ $patient->nombre }} {{ $patient->apellidos }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="medico_id" class="form-label">Médico</label>
            <select name="medico_id" class="form-control" required>
                <option value="">Seleccione un médico</option>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}" {{ old('medico_id') == $doctor->id ? 'selected' : '' }}>
                        Dr. {{ $doctor->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="motivo" class="form-label">Motivo</label>
            <textarea name="motivo" class="form-control" rows="3" required>{{ old('motivo') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" class="form-control">
                <option value="pendiente" {{ old('estado') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="confirmada" {{ old('estado') == 'confirmada' ? 'selected' : '' }}>Confirmada</option>
                <option value="cancelada" {{ old('estado') == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar Cita</button>
        <a href="{{ route('quotes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
