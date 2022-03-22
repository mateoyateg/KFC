<?php

//conecta al admin con el front-end
$servername = "localhost"; //servidor
$username = "kfc"; //nombre de usuario en la bd
$password = "12345"; //contraseña de la bd
$dbname = "kfc";  //base de datos

// crea la conexión
$db = mysqli_connect($servername, $username, $password, $dbname); // conectando 
// Check connection
if (!$db) {       //verifica si se puede conectar a la bd
    die("Connection failed: " . mysqli_connect_error());
}

?>