<?php
session_start(); //inicia la sesión
session_destroy(); //destruir todas las sesiones actuales
$url = 'login.php';
header('Location: ' . $url); // redirecciona a la página de ingreso

?>