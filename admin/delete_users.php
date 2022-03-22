<?php
include("../connection/connect.php"); //conexión a al bd
error_reporting(0);
session_start();


// enviando sentencia de borrado
mysqli_query($db,"DELETE FROM users WHERE u_id = '".$_GET['user_del']."'");
header("location:allusers.php");  

?>
