<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/estilos_asignar_cita.css'])
    <title>Asignar Cita</title>
</head>
<body>

    <h1>Asignar Nueva Cita</h1>

    <form action="" method="POST">

        <label for="documento">Documento del Paciente:</label>
        <input type="text" id="documento" name="documento" required><br><br>

        <label for="nombre">Nombre Completo:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="fecha">Fecha de la Cita:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <label for="hora">Hora de la Cita:</label>
        <input type="time" id="hora" name="hora" required><br><br>

        <label for="especialidad">Especialidad:</label>
        <select id="especialidad" name="especialidad" required>
            <option value="">Seleccione una opción</option>
            <option value="general">Medicina General</option>
            <option value="odontologia">Odontología</option>
            <option value="pediatria">Pediatría</option>
        </select><br><br>

        <label for="observaciones">Observaciones (opcional):</label><br>
        <textarea id="observaciones" name="observaciones" rows="3"></textarea><br><br>

        <button type="submit">Asignar Cita</button>
    </form>

</body>
</html>