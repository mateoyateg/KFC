<?php
include("../connection/connect.php"); //conexión a la bd
error_reporting(0);
session_start();


// enviando sentencia
mysqli_query($db,"DELETE FROM res_category WHERE c_id = '".$_GET['cat_del']."'");
header("location:add_category.php");  

?>
