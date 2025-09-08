@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Doctores guapos</h1>
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