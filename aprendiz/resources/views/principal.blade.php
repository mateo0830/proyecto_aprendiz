<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión Odontológica</title>
<<<<<<< HEAD
     @vite(['resources/css/estilos.css','resources/css/estilosPlantillas.css'])
 
=======
    @vite(['resources/css/estilos.css'])
>>>>>>> temp-branch
</head>
<body>
    <div id="contenedor">
        <header id="encabezado">
            <h1>Sistema de Gestión Odontológica</h1>
<<<<<<< HEAD
        </div>
        <ul id="menu">
            <li><a href="">Inicio</a></li>
            <li><a href="{{ route('asignar_cita') }}">Asignar Cita</a></li>
            <li><a href="">Consultar Cita</a></li>
            <li><a href="">Cancelar Cita</a></li>
            <li><a href="{{ route('iniciar.sesion') }}">Iniciar Sesión</a></li>
        </ul>
        <div id="contenido">
            <h2>Información General</h2>
=======
        </header>
        <nav aria-label="Navegación principal">
            <ul id="menu">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ route('asignar_cita') }}">Asignar cita</a></li>
                <li><span aria-disabled="true">Consultar cita</span></li>
                <li><span aria-disabled="true">Cancelar cita</span></li>
                <li><a href="{{ route('iniciar.sesion') }}">Iniciar sesión</a></li>
            </ul>
        </nav>
        <main id="contenido">
            <h2>Información general</h2>
>>>>>>> temp-branch
            <p>El Sistema de Gestión Odontológica permite administrar la información de los pacientes, tratamientos y citas a través de una interfaz web.</p>
            <p>Desde aquí puedes asignar una nueva cita. Las opciones para consultar y cancelar citas todavía no están disponibles.</p>
        </main>
    </div>
</body>
</html>
