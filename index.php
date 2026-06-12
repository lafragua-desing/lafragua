<?php
// index.php — Página principal con formulario
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Primera Web en PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bienvenido a mi web en PHP</h1>
    <p>Introduce tu nombre y recibirás un saludo personalizado.</p>

    <!-- Formulario que envía datos a procesar.php -->
    <form action="inicio.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
