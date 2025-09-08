@extends('layouts.app')

@section('content')
<style>
 /* ===== CONTENEDOR ===== */
.container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 25px;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.12);
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

/* ===== TÍTULO ===== */
.container h1 {
    text-align: center;
    margin-bottom: 25px;
    color: #2c3e50;
    font-size: 28px;
    font-weight: bold;
}

/* ===== ALERTA DE ÉXITO ===== */
.alert-success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    padding: 12px;
    border-radius: 6px;
    margin-bottom: 20px;
}

/* ===== BOTÓN NUEVO DOCTOR ===== */
.btn-primary {
    background: #007bff;
    border: none;
    padding: 10px 18px;
    border-radius: 6px;
    color: #fff;
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
}

.btn-primary:hover {
    background: #0056b3;
    transform: translateY(-2px);
}

/* ===== TABLA ===== */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
}

.table thead {
    background: #17a2b8;
    color: #fff;
    text-align: left;
}

.table th,
.table td {
    padding: 12px 15px;
    border-bottom: 1px solid #ddd;
    font-size: 14px;
}

.table tbody tr:hover {
    background: #f9f9f9;
}

/* ===== BOTONES DE ACCIÓN ===== */
.btn-sm {
    padding: 6px 12px;
    font-size: 13px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    transition: 0.3s;
}

.btn-warning {
    background: #ffc107;
    color: #212529;
}

.btn-warning:hover {
    background: #e0a800;
    transform: translateY(-2px);
}

.btn-danger {
    background: #dc3545;
    color: #fff;
}

.btn-danger:hover {
    background: #c82333;
    transform: translateY(-2px);
}

</style>
<div class="container">
    <h1>Lista de Pacientes</h1>
    <a href="{{ route('patients.create') }}" class="btn btn-primary mb-3">Nuevo Paciente</a>
    <br>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Tipo Sangre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->nombre }}</td>
                <td>{{ $patient->apellidos }}</td>
                <td>{{ $patient->telefono }}</td>
                <td>{{ $patient->tipo_sangre }}</td>
                <td>
                    <a href="{{ route('patients.edit',$patient->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('patients.destroy',$patient->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
