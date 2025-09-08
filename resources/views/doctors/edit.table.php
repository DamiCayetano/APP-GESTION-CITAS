@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Paciente</h1>
    <form action="{{ route('patients.update',$patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ $patient->nombre }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Apellidos</label>
            <input type="text" name="apellidos" value="{{ $patient->apellidos }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" value="{{ $patient->fecha_nacimiento }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Género</label>
            <select name="genero" class="form-control" required>
                <option value="femenino" {{ $patient->genero == 'femenino' ? 'selected' : '' }}>Femenino</option>
                <option value="masculino" {{ $patient->genero == 'masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="ninguno" {{ $patient->genero == 'ninguno' ? 'selected' : '' }}>Ninguno</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Teléfono</label>
            <input type="text" name="telefono" maxlength="7" value="{{ $patient->telefono }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Dirección</label>
            <textarea name="direccion" class="form-control" required>{{ $patient->direccion }}</textarea>
        </div>
        <div class="mb-3">
            <label>Tipo de Sangre</label>
            <select name="tipo_sangre" class="form-control" required>
                <option value="A" {{ $patient->tipo_sangre == 'A' ? 'selected' : '' }}>A</option>
                <option value="B" {{ $patient->tipo_sangre == 'B' ? 'selected' : '' }}>B</option>
                <option value="AB" {{ $patient->tipo_sangre == 'AB' ? 'selected' : '' }}>AB</option>
                <option value="O" {{ $patient->tipo_sangre == 'O' ? 'selected' : '' }}>O</option>
                <option value="ninguna" {{ $patient->tipo_sangre == 'ninguna' ? 'selected' : '' }}>Ninguna</option>
            </select>
        </div>
        <button class="btn btn-success" type="submit">Actualizar</button>
        <a href="{{ route('patients.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection