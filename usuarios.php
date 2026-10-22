<?php
// Este archivo solo se incluye desde carga.php; si se abre directo, al index
if (basename($_SERVER['SCRIPT_FILENAME']) === basename(__FILE__)) {
    header('Location: index.html');
    exit;
}

// "Base" de usuarios registrados (sin base de datos: un array en PHP).
// Clave = nombre de usuario.
$usuarios = [
    'admin' => [
        'password' => '12345',
        'nombre'   => 'Diego Leguizamon',
    ],
];
