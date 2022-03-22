<!DOCTYPE html>
<html lang="es" >
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"])) 
     {
	$loginquery ="SELECT * FROM admin WHERE username='$username' && password='".md5($password)."'";
	$result=mysqli_query($db, $loginquery);
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row))
								{
                                    	$_SESSION["adm_id"] = $row['adm_id'];
										 header("refresh:1;url=dashboard.php");
	                            } 
							else
							    {
                                      	$message = "Usuario o contraseña invalida";
                                }
	 }
	
	
}

if(isset($_POST['submit1'] ))
{
     if(empty($_POST['cr_user']) ||
   	    empty($_POST['cr_email'])|| 
		empty($_POST['cr_pass']) ||  
		empty($_POST['cr_cpass']) ||
		empty($_POST['code']))
		{
			$message = "Se deben rellenar todos los campos";
		}
	else
	{
		
	
	$check_username= mysqli_query($db, "SELECT username FROM admin where username = '".$_POST['cr_user']."' ");
	
	$check_email = mysqli_query($db, "SELECT email FROM admin where email = '".$_POST['cr_email']."' ");
	
	  $check_code = mysqli_query($db, "SELECT adm_id FROM admin where code = '".$_POST['code']."' ");

	
	if($_POST['cr_pass'] != $_POST['cr_cpass']){
       	$message = "Contraseña incorrecta";
    }
	
    elseif (!filter_var($_POST['cr_email'], FILTER_VALIDATE_EMAIL)) // Valida la dirección de correo
    {
       	$message = "Correo invalido, por favor ingrese valores correctos";
    }
	elseif(mysqli_num_rows($check_username) > 0)
     {
    	$message = 'El nombre de usuario ya existe';
     }
	elseif(mysqli_num_rows($check_email) > 0)
     {
    	$message = 'Correo ya existe';
     }
	 if(mysqli_num_rows($check_code) > 0)           // si el código ya existe
             {
                   $message = "¡Código único ya canjeado!";
             }
	else{
       $result = mysqli_query($db,"SELECT id FROM admin_codes WHERE codes =  '".$_POST['code']."'");  //consulta para seleccionar el id del código válido introducido por el usuario
					  
                     if(mysqli_num_rows($result) == 0)     //si el código no es valido
						 {
                            // row not found, do stuff...
			                 $message = "Código invalido";
                         } 
                      
                      else                                 //si el código es valido
					     {
	
								$mql = "INSERT INTO admin (username,password,email,code) VALUES ('".$_POST['cr_user']."','".md5($_POST['cr_pass'])."','".$_POST['cr_email']."','".$_POST['code']."')";
								mysqli_query($db, $mql);
									$success = "Admin Added successfully!";
						 }
        }
	}

}
?>

<head>
  <meta charset="UTF-8">
  <title>KFC Admin</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">
      <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

  
</head>

<body style="background-image: url(https://i2-prod.mirror.co.uk/incoming/article11532840.ece/ALTERNATES/s1200/KFC-FESTIVE-MENU.jpg);
background-size: cover">

  
<div class="container">
  <div class="info">
    <h1>Administración </h1><span> Cuenta de acceso</span>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="images/manager.png"/></div>
  
  <form class="register-form" action="index.php" method="post">
    <input type="text" placeholder="Usuario" name="cr_user"/>
    <input type="text" placeholder="Correo"  name="cr_email"/>
	 <input type="password" placeholder="Contraseña"  name="cr_pass"/>
	  <input type="password" placeholder="Confirmar contraseña"  name="cr_cpass"/>
	  <input type="password" placeholder="Codigo"  name="code"/>
   <input type="submit"  name="submit1" value="Crear" />
    <p class="message">Ya está registrado <a href="#">Registrarse</a></p>
  </form>
  <!--<span>username:admin</span>&nbsp;<span>password:1234</span>!-->
  <span style="color:red;"><?php echo $message; ?></span>
   <span style="color:green;"><?php echo $success; ?></span>
  <form class="login-form" action="index.php" method="post">
    <input type="text" placeholder="Nombre de usuario" name="username"/>
    <input type="password" placeholder="Contraseña" name="password"/>
    <input type="submit"  name="submit" value="Ingresar" />
    <p class="message">¿No está registrado? <a href="#">Cree una cuenta</a></p>
  </form>
  
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='js/index.js'></script>
  

    



</body>

</html>
