<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/estilos_iniciar_sesion.css'])
    <title>Iniciar sesión</title>
</head>
<body>
    <main>
        <h1>Iniciar sesión</h1>
        <form method="post" action="{{ route('iniciar.sesion.procesar') }}">
            @csrf
            @error('email')
                <p role="alert">{{ $message }}</p>
            @enderror
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" autocomplete="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" autocomplete="current-password" required>
            <button type="submit">Iniciar sesión</button>
        </form>
    </main>
</body>
</html>
