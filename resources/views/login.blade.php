<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/login.css','resources/js/app.js')
</head>
<body>
  <div class="container">
        <!-- Contenedor izquierdo -->
        <div class="left">
            <img src="{{ asset('img/wa.png') }}" alt="Salud Contigo">
        </div>

        <!-- Contenedor derecho -->
        <div class="right">
            <div class="card">
                <h2>INICIO DE SESIÓN</h2>

                @if(session('error'))
                    <p class="error">{{ session('error') }}</p>
                @endif

                <form action="/login" method="POST">
                    @csrf
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" required placeholder="Usuario">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" required placeholder="Contraseña">

                    <button type="submit">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>