<?php
include("../connection/connect.php"); // se conecta a la bd
error_reporting(0);
session_start();


// Envía la sentencia SQL
mysqli_query($db,"DELETE FROM restaurant WHERE rs_id = '".$_GET['res_del']."'");
header("location:allrestraunt.php");  

?>
