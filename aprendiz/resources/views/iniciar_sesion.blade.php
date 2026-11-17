<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/estilos_iniciar_sesion.css'])
    <title>Iniciar sesion</title>
</head>
<body>
    <form action="">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>