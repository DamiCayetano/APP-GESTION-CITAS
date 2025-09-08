@extends('layouts.app')

@section('content')
<style>
    /* ====== CONTENEDOR PRINCIPAL ====== */
.container {
    max-width: 600px;
    margin: 30px auto;
    padding: 20px;
    background: #ffffff;
    border-radius: 10px;

    font-family: Arial, sans-serif;
}

/* ====== TÍTULO ====== */
.container h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* ====== LABELS ====== */
label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
    color: #444;
}

/* ====== INPUTS, TEXTAREA Y SELECT ====== */
.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    margin-bottom: 15px;
    transition: border-color 0.3s;
}

.form-control:focus {
    border-color: #28a745;
    outline: none;
}

/* ====== BOTONES ====== */
.btn {
    display: inline-block;
    padding: 10px 18px;
    border-radius: 6px;
    font-size: 14px;
    text-decoration: none;
    cursor: pointer;
    border: none;
    transition: background 0.3s;
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
    margin-left: 10px;
}

.btn-secondary:hover {
    background: #5a6268;
}

</style>
<div class="container">
    <h1>Registrar Paciente</h1>
    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Apellidos</label>
            <input type="text" name="apellidos" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Género</label>
            <select name="genero" class="form-control" required>
                <option value="femenino">Femenino</option>
                <option value="masculino">Masculino</option>
                <option value="ninguno">Ninguno</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Teléfono</label>
            <input type="text" name="telefono" maxlength="7" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Dirección</label>
            <textarea name="direccion" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Tipo de Sangre</label>
            <select name="tipo_sangre" class="form-control" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
                <option value="ninguna">Ninguna</option>
            </select>
        </div>
        <button class="btn btn-success" type="submit">Guardar</button>
        <a href="{{ route('patients.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
