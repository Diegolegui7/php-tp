<?php
session_start();
require 'usuarios.php';

// 1) Si llegan datos del formulario, se validan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario  = trim($_POST['usuario'] ?? '');
    $password = $_POST['password'] ?? '';

    if (isset($usuarios[$usuario]) && $usuarios[$usuario]['password'] === $password) {
        // Login correcto: se guarda el usuario en la sesión
        session_regenerate_id(true);
        $_SESSION['logueado'] = true;
        $_SESSION['nombre']   = $usuarios[$usuario]['nombre'];
        unset($_SESSION['error_login']);
    } else {
        // Login incorrecto: se marca el error y se envía a error.php
        $_SESSION['error_login'] = true;
        header('Location: error.php');
        exit;
    }
}

// 2) Si no hay sesión válida (por ejemplo, se escribió la URL a mano), al index
if (empty($_SESSION['logueado'])) {
    header('Location: index.html');
    exit;
}

$nombre = htmlspecialchars($_SESSION['nombre']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main class="tarjeta">
        <h1>Bienvenido <?= $nombre ?></h1>
        <p class="subtitulo">Iniciaste sesión correctamente.</p>
        <a class="boton" href="salir.php">Cerrar sesión</a>
    </main>
</body>
</html>
