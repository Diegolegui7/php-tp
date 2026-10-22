<?php
// Cierra la sesión y vuelve al index
session_start();
$_SESSION = [];
session_destroy();
header('Location: index.html');
exit;
