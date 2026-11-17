<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/estilos_iniciar_sesion.css'])
    <title>Asignar cita</title>
</head>
<body>
    <main>
        <h1>Asignar nueva cita</h1>
        <form method="post">
            @csrf
            <label for="documento">Documento del paciente:</label>
            <input type="text" id="documento" name="documento" autocomplete="off" required>

            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" autocomplete="name" required>

            <label for="fecha">Fecha de la cita:</label>
            <input type="date" id="fecha" name="fecha" required>

            <label for="hora">Hora de la cita:</label>
            <input type="time" id="hora" name="hora" required>

            <label for="especialidad">Especialidad:</label>
            <select id="especialidad" name="especialidad" required>
                <option value="">Seleccione una opción</option>
                <option value="general">Medicina general</option>
                <option value="odontologia">Odontología</option>
                <option value="pediatria">Pediatría</option>
            </select>

            <label for="observaciones">Observaciones (opcional):</label>
            <textarea id="observaciones" name="observaciones" rows="3"></textarea>

            <button type="submit">Asignar cita</button>
        </form>
    </main>
</body>
</html>
