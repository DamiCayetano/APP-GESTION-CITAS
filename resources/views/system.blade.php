<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    @vite('resources/css/system.css')
</head>
<body>
<!-- Logo y Título -->
  <header class="header">
    <img src="img/system.png" alt="Logo Salud Contigo" class="logo">
    <!--<h1>SALUD <br> CONTIGO</h1>-->
  </header>

  <!-- Contenedor de Cards -->
  <section class="cards-grid">
    <a href="{{ url('/pacientes') }}" class="card">
      <img src="{{ asset('img/pacientes.png') }}" alt="Pacientes">
      <p>Pacientes</p>
    </a>

    <a href="{{ url('/medicos') }}" class="card">
      <img src="{{ asset('img/medicos.png') }}" alt="Médicos">
      <p>Médicos</p>
    </a>

    <a href="{{ url('/citas') }}" class="card">
      <img src="{{ asset('img/citas.png') }}" alt="Citas">
      <p>Citas</p>
    </a>

    <a href="{{ url('/diagnosticos') }}" class="card">
      <img src="{{ asset('img/diagnosticos.png') }}" alt="Diagnósticos">
      <p>Diagnósticos</p>
    </a>
</section>

<section class="cards-center">
    <a href="{{ url('/tratamientos') }}" class="card">
      <img src="{{ asset('img/tratamientos.png') }}" alt="Tratamientos">
      <p>Tratamientos</p>
    </a>

    <a href="{{ url('/medicamentos') }}" class="card">
      <img src="{{ asset('img/medicamentos.png') }}" alt="Medicamentos">
      <p>Medicamentos</p>
    </a>
</section>

</body>
</html>