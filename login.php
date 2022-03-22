<!DOCTYPE html>
<html lang="es" >

<head>
  <meta charset="UTF-8">
  <title>login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">


	  <style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #A3080C;
	  }
	  </style>

    <link rel="apple-touch-icon" sizes="57x57" href="images/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>LOGIN</title>
  
</head>

<body style="background-image: url(./images/fondo.jpg);
background-size: cover" width="100%">
<?php
include("connection/connect.php"); //inicia la conexión a la base de datos
error_reporting(0); // ocultar errores de índice indefinidos
session_start(); // iniciar sesión
if(isset($_POST['submit']))   //si el boton es pulsado
{
	$username = $_POST['username'];  //recuperar registros del formulario de inicio de sesión
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   // si los registros no estan vacíos
     {
	$loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //la sentencia busca los datos
	$result=mysqli_query($db, $loginquery); //ejecutando
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))  // 
								{
                                    	$_SESSION["user_id"] = $row['u_id']; // poner la identificación del usuario en la sesión temporal
										 header("refresh:1;url=index.php"); // redirecciona al index.php 
	                            } 
							else
							    {
                                      	$message = "Contraseña o contraseña invalida"; // se captura el error
                                }
	 }
	
	
}
?>
  
<div class="pen-title">
  <h1 style="color: black;
  font-weight: 800;
  backgound: #f5d4b7" > </h1>
</div>

<div class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form">
    <h2 style="color: black;
    font-weight: 500;
    text-align: center;" >Formulario de ingreso</h2>
    <h2 style="color: #A3080C;
    font-weight: 500;
    text-align: center;"> Ingresa a tu cuenta </h2>
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="" method="post">
      <input type="text" placeholder="Usuario"  name="username"/>
      <input type="password" placeholder="Contraseña" name="password"/>
      <input type="submit" id="buttn" name="submit" value="Ingresar" />
    </form>
  </div>
  
  <div class="cta">No está registrado?<a href="registration.php" style="color:#a3080c;"> Crear cuenta</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   



</body>

</html>
