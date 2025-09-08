@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Doctores</h1>
    <form action="{{ route('doctors.update',$doctor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ $doctor->nombre }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Apellidos</label>
            <input type="text" name="apellidos" value="{{ $doctor->apellidos }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Especialidad</label>
            <select name="especialidad" class="form-control" required>
                <option value="neurocirujano" {{ $patient->especialidad == 'neurocirujano' ? 'selected' : '' }}>Neurocirujano</option>
                <option value="cardiologo" {{ $patient->especialidad == 'cardiologo' ? 'selected' : '' }}>Cardiologo</option>
                <option value="ginecologo" {{ $patient->especialidad == 'ginecologo' ? 'selected' : '' }}>Ginecologo</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Telefono</label>
            <input type="text" name="telefono" value="{{ $doctor->telefono }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="text" name="email" value="{{ $doctor->email }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Licencia</label>
            <input type="text" name="licencia" value="{{ $doctor->licencia }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Años de experiencia</label>
            <input type="text" name="años_experiencia" value="{{ $doctor->años_experiencia }}" class="form-control" required>
        </div>


        <button class="btn btn-success" type="submit">Actualizar</button>
        <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection