<?php
// procesar.php — Procesa el formulario y muestra respuesta

// Validar que el formulario fue enviado por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitizar entrada para evitar XSS
    $nombre = htmlspecialchars(trim($_POST["nombre"] ?? ""), ENT_QUOTES, 'UTF-8');
	
    if ($nombre === "") {
        echo "<p>Error: No ingresaste un nombre válido.</p>";
        echo '<a href="index.php">Volver</a>';
        exit;
    }

    // Mostrar saludo
    echo "<h1>Hola, $nombre 👋</h1>";
    echo '<a href="index.php">Volver</a>';
} else {
    // Si se accede directamente sin POST
    header("Location: index.php");
    exit;
}
