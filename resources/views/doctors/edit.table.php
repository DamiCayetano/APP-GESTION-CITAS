@extends('layouts.app')

@section('content')
<style>
    /* ===== Estilos generales para el contenedor ===== */
.container {
    max-width: 700px;
    margin: 50px auto;
    padding: 25px 30px;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

/* ===== Título ===== */
.container h1 {
    text-align: center;
    font-size: 26px;
    color: #2c3e50;
    margin-bottom: 25px;
    font-weight: bold;
}

/* ===== Formularios ===== */
form .mb-3 {
    margin-bottom: 18px;
}

form label {
    display: block;
    font-weight: 600;
    margin-bottom: 6px;
    color: #34495e;
}

form input,
form select,
form textarea {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ccd1d9;
    border-radius: 6px;
    font-size: 15px;
    background: #fdfdfd;
    transition: all 0.3s ease;
}

form input:focus,
form select:focus,
form textarea:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.4);
}

/* ===== Botones ===== */
.btn-success {
    background-color: #27ae60;
    border: none;
    padding: 10px 22px;
    border-radius: 6px;
    font-size: 15px;
    transition: background 0.3s ease;
}

.btn-success:hover {
    background-color: #219150;
}

.btn-secondary {
    background-color: #7f8c8d;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    font-size: 15px;
    margin-left: 10px;
    transition: background 0.3s ease;
}

.btn-secondary:hover {
    background-color: #6c7a7a;
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