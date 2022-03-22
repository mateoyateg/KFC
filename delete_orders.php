<?php
include("connection/connect.php"); //se conecta a la bd
error_reporting(0);
session_start();


// Enviando sentencia
mysqli_query($db,"DELETE FROM users_orders WHERE o_id = '".$_GET['order_del']."'"); // supresión de registros sobre la base de la identificación
header("location:your_orders.php");  //Una vez eliminado con éxito, se vuelve a la página 

?>
