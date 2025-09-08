@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Medicamentos</h1>
    <form action="{{ route('medications.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Dosis</label>
            <input type="text" name="dosis" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Frecuencia</label>
            <input type="text" name="frecuencia" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Duración</label>
            <input type="text" name="duracion" class="form-control" required>
        </div>

        <!--
        <div class="mb-3">
            <label>Tratamiento</label>
            <select name="tratamiento" class="form-control" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div> -->

        <div class="mb-3">
            <label>Proveedor</label>
            <input type="text" name="proveedor" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Efectos secundarios</label>
            <input type="text" name="efectos_secundarios" class="form-control" required>
        </div>

        <button class="btn btn-success" type="submit">Guardar</button>
        <a href="{{ route('medications.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection