<?php
session_start();

// Solo se muestra si se viene de un intento de login fallido;
// si se entra directo por URL, se redirige al index.
if (empty($_SESSION['error_login'])) {
    header('Location: index.html');
    exit;
}

// Se consume el aviso: al recargar la página vuelve al index
unset($_SESSION['error_login']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error de acceso</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main class="tarjeta">
        <h1 class="error">Error de acceso</h1>
        <p class="subtitulo">El usuario o la contraseña son incorrectos.</p>
        <a class="boton" href="index.html">Volver a intentar</a>
    </main>
</body>
</html>
