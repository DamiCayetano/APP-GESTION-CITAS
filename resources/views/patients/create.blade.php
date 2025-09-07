@extends('layouts.app')

@section('content')
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
