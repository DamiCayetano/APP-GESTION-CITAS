@extends('layouts.app')

@section('content')
<style>
    /* ===== CONTENEDOR ===== */
.container {
    max-width: 600px;
    margin: 30px auto;
    padding: 25px;
    background: #ffffff;
    border-radius: 12px;
    font-family: Arial, sans-serif;
}

/* ===== TÍTULO ===== */
.container h1 {
    text-align: center;
    margin-bottom: 25px;
    color: #2c3e50;
    font-size: 24px;
}

/* ===== LABELS ===== */
label {
    font-weight: bold;
    margin-bottom: 6px;
    display: block;
    color: #444;
}

/* ===== CAMPOS (inputs, selects, textarea) ===== */
.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 18px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 4px rgba(0,123,255,0.3);
    outline: none;
}

/* ===== BOTONES ===== */
.btn {
    display: inline-block;
    padding: 10px 18px;
    border-radius: 6px;
    font-size: 14px;
    cursor: pointer;
    border: none;
    transition: background 0.3s, transform 0.2s;
    text-decoration: none;
}

.btn:hover {
    transform: translateY(-2px);
}

.btn-success {
    background: #28a745;
    color: #fff;
}

.btn-success:hover {
    background: #218838;
}

.btn-secondary {
    background: #6c757d;
    color: #fff;
    margin-left: 8px;
}

.btn-secondary:hover {
    background: #5a6268;
}

</style>
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
