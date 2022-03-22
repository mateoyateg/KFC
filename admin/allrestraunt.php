<!DOCTYPE html>
<html lang="es">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <title>KFC Admin</title>

    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    
</head>

<body class="fix-header fix-sidebar">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
 
    <div id="main-wrapper">
      
         <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <b><img src="images/icon/favicon-32x32.png" alt="homepage" class="dark-logo" /></b> 
                       <span>KFC</span>
                    </a>
                </div>
               
                <div class="navbar-collapse">
                    
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                     
                       
                    </ul>
                    
                    <ul class="navbar-nav my-lg-0">

                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Buscar"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        
                      
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                   
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Cerrar sesión</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
 
        <div class="left-sidebar">

            <div class="scroll-sidebar">

                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Inicio</li>
                        <li> <a class="has-arrow  " href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                            
                        </li>
                        <li class="nav-label">Registro</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">Usuarios</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="allusers.php">Todos los usuarios</a></li>
                                <li><a href="add_users.php">Añadir usuario</a></li>                             
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Tiendas</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="allrestraunt.php">Todas las tiendas</a></li>
                                <li><a href="add_category.php">Añadir categoría</a></li>
                                <li><a href="add_restraunt.php">Añadir tienda</a></li>
                                
                            </ul>
                        </li>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menú</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all_menu.php">Todos los menús</a></li>
                                <li><a href="add_menu.php">Añadir menú</a></li>
                            
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hide-menu">Ordenes</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all_orders.php">Todas las ordenes</a></li>
                                
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
                
            </div>
                
            </div>
        
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
               
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
 
						     <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Datos de todas las tiendas</h4>
                                <h6 class="card-subtitle">Exportación de datos a Copia, CSV, Excel, PDF e Impresión</h6>
								
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
											 <th>Catalogo</th>
                                                <th>Nombre de la tienda</th>
                                                <th>Correo</th>
                                                <th>Teléfono</th>
                                                <th>Url</th>
                                                <th>Hrs. abierto</th>
                                                <th>Hrs. cierre</th>
												<th>Días abierto</th>
												  <th>Dirección</th>
												  <th>Img. tienda</th>
												  <th>Fecha</th>
												   <th>Acciones</th>
												  
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
											 <<th>Catalogo</th>
                                                <th>Nombre de la tienda</th>
                                                <th>Correo</th>
                                                <th>Teléfono</th>
                                                <th>Url</th>
                                                <th>Hrs. abierto</th>
                                                <th>Hrs. cierre</th>
												<th>Días abierto</th>
												  <th>Dirección</th>
												  <th>Img. tienda</th>
												  <th>Fecha</th>
												   <th>Acciones</th>
												  
                                            </tr>
                                        </tfoot>
                                        <tbody>
										
                                           
                                               	<?php
												$sql="SELECT * FROM restaurant order by rs_id desc";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="11"><center>No hay almacenes de datos!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																					
																				$mql="SELECT * FROM res_category where c_id='".$rows['c_id']."'";
																					$res=mysqli_query($db,$mql);
																					$row=mysqli_fetch_array($res);
																				
																					echo ' <tr><td>'.$row['c_name'].'</td>
																								<td>'.$rows['title'].'</td>
																								<td>'.$rows['email'].'</td>
																								<td>'.$rows['phone'].'</td>
																								<td>'.$rows['url'].'</td>
																								
																								
																								<td>'.$rows['o_hr'].'</td>
																								<td>'.$rows['c_hr'].'</td>
																								<td>'.$rows['o_days'].'</td>
																								
																								<td>'.$rows['address'].'</td>
																								
																								<td><div class="col-md-3 col-lg-8 m-b-10">
																								<center><img src="Res_img/'.$rows['image'].'" class="img-responsive radius"  style="min-width:150px;min-height:100px;"/></center>
																								</div></td>
																								
																								<td>'.$rows['date'].'</td>
																									 <td><a href="delete_stores.php?res_del='.$rows['rs_id'].'" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
																									 <a href="update_restraunt.php?res_upd='.$rows['rs_id'].'" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-settings"></i></a>
																									</td></tr>';
																					 
																						
																						
																		}	
														}
												
											
											    ?>
                                            
                                           
                                 
                                                        
                                                            
                                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						

						 </div>
                      
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
  
    </div>
 
    <script src="js/lib/jquery/jquery.min.js"></script>
  
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
  
    <script src="js/jquery.slimscroll.js"></script>
  
    <script src="js/sidebarmenu.js"></script>
   
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
 
    <script src="js/custom.min.js"></script>


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

</html>