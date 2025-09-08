@extends('layouts.app')

@section('content')
<style>
    /* ===== CONTENEDOR ===== */
.container {
    max-width: 650px;
    margin: 40px auto;
    padding: 30px;
    background: #ffffff;
    border-radius: 12px;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

/* ===== TÍTULO ===== */
.container h1 {
    text-align: center;
    margin-bottom: 25px;
    color: #2c3e50;
    font-size: 26px;
    font-weight: bold;
}

/* ===== LABELS ===== */
label {
    font-weight: 600;
    margin-bottom: 6px;
    display: block;
    color: #34495e;
}

/* ===== INPUTS, SELECTS Y TEXTAREAS ===== */
.form-control {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 18px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    transition: all 0.3s ease-in-out;
    background-color: #fafafa;
}

.form-control:focus {
    border-color: #17a2b8;
    box-shadow: 0 0 6px rgba(23, 162, 184, 0.4);
    outline: none;
    background-color: #fff;
}

/* ===== BOTONES ===== */
.btn {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 6px;
    font-size: 14px;
    cursor: pointer;
    border: none;
    text-decoration: none;
    transition: all 0.3s;
}

/* Botón guardar */
.btn-success {
    background: #28a745;
    color: #fff;
}

.btn-success:hover {
    background: #218838;
    transform: translateY(-2px);
}

/* Botón cancelar */
.btn-secondary {
    background: #6c757d;
    color: #fff;
    margin-left: 10px;
}

.btn-secondary:hover {
    background: #5a6268;
    transform: translateY(-2px);
}

</style>
<div class="container">
    <h1>Registrar Doctores</h1>
    <form action="{{ route('doctors.store') }}" method="POST">
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
            <label>Especialidad</label>
            <select name="especialidad" class="form-control" required>
                <option value="neurocirujano">Neurocirujano</option>
                <option value="cardiologo">Cardiólogo</option>
                <option value="ginecologo">Ginecólogo</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Teléfono</label>
            <input type="text" name="telefono" maxlength="9" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="text" name="email"  class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Licencia</label>
            <input type="text" name="licencia" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Años de experiencia</label>
            <input type="number" name="años_experiencia" min="0" class="form-control" required>
        </div>

        <button class="btn btn-success" type="submit">Guardar</button>
        <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection