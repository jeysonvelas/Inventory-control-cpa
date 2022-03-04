<?php
session_start();

if ($_SESSION['login'] == 'true') {
    $usuario = $_SESSION['Nombre'];
    $ID = $_SESSION['id_usuario'];

} else {
  header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administracion</title>

     <!-- Favicons -->
     <link href="/Inventory control cpa/assets/img/admin.png" rel="icon">
     <link href="/Inventory control cpa/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                <i class="fas fa-user-tie"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Panel <sup>Administrativo</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Interface
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <div class="sidebar-heading">
                Administrar
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Menu</span>
                </a>
                <?php
                if ($_SESSION['Perfil']=='1'){
                echo
                '<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Administración Usuarios:</h6>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#registroModal">
                        <i class="fas fa-address-card"></i>&nbsp;&nbsp;Registrar Usuario</a>
                        <a class="collapse-item" href="consultarUsuario.php"><i class="fas fa-search"></i>&nbsp;&nbsp;Consultar Usuarios</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Administración Producto:</h6>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#modalRegisterProducto">
                        <i class="fas fa-file-signature"></i>&nbsp;&nbsp;Registrar Producto</a>
                        <a class="collapse-item" href="consultarProducto.php"><i class="fas fa-search"></i>&nbsp;&nbsp;Consultar Producto</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Administración Categoria:</h6>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#registerModalCategoria">
                        <i class="fas fa-list-alt"></i>&nbsp;&nbsp;Registrar Categoria</a>
                        <a class="collapse-item" href="consultarCategoria.php"><i class="fas fa-search"></i>&nbsp;&nbsp;Consultar Categoria</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Administración Inventario:</h6>
                        <a class="collapse-item" href="#" data-toggle="modal" data-target="#registroModalInventario">
                        <i class="fas fa-boxes"></i>&nbsp;&nbsp;Registrar Inventario</a>
                        <a class="collapse-item" href="consultarInventario.php"><i class="fas fa-search"></i>&nbsp;&nbsp;Consultar Inventario</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Administración Reportes:</h6>
                        <a class="collapse-item" href="consultarReporte.php"><i class="fas fa-search"></i>&nbsp;&nbsp;Consulta de Reportes</a>
                    </div>
                </div>' ;}else if ($_SESSION['Perfil']=='2'){
                    
                    echo 
                    '<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Administración Producto:</h6>
                                <a class="collapse-item" href="#" data-toggle="modal" data-target="#modalRegisterProducto">
                                <i class="fas fa-file-signature"></i>&nbsp;&nbsp;Registrar Producto</a>
                                <a class="collapse-item" href="consultarProducto.php"><i class="fas fa-search"></i>&nbsp;&nbsp;Consultar Producto</a>
                                <div class="collapse-divider"></div>
                                <h6 class="collapse-header">Administración Categoria:</h6>
                                <a class="collapse-item" href="#" data-toggle="modal" data-target="#registerModalCategoria">
                                <i class="fas fa-list-alt"></i>&nbsp;&nbsp;Registrar Categoria</a>
                                <a class="collapse-item" href="consultarCategoria.php"><i class="fas fa-search"></i>&nbsp;&nbsp;Consultar Categoria</a>
                                <div class="collapse-divider"></div>
                                <h6 class="collapse-header">Administración Inventario:</h6>
                                <a class="collapse-item" href="#" data-toggle="modal" data-target="#registroModalInventario">
                                <i class="fas fa-boxes"></i>&nbsp;&nbsp;Registrar Inventario</a>
                                <a class="collapse-item" href="consultarInventario.php"><i class="fas fa-search"></i>&nbsp;&nbsp;Consultar Inventario</a>
                            </div>
                        </div>';} else{ echo 
                        '<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Administración Producto:</h6>
                                <a class="collapse-item" href="consultarProducto.php"><i class="fas fa-search"></i>&nbsp;&nbsp;Consultar Producto</a>
                                <div class="collapse-divider"></div>
                                <h6 class="collapse-header">Administración Categoria:</h6>
                                <a class="collapse-item" href="consultarCategoria.php"><i class="fas fa-search"></i>&nbsp;&nbsp;Consultar Categoria</a>
                                <div class="collapse-divider"></div>
                                <h6 class="collapse-header">Administración Inventario:</h6>
                                <a class="collapse-item" href="consultarInventario.php"><i class="fas fa-search"></i>&nbsp;&nbsp;Consultar Inventario</a>
                            </div>
                        </div>';} ?>                        
            </li>          

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> -->

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->     
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <!-- <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a> -->
                            <!-- Dropdown - Messages -->
                            <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li> -->

                        <!-- Nav Item - Alerts -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i> -->
                                <!-- Counter - Alerts -->
                                <!-- <span class="badge badge-danger badge-counter">3+</span>
                            </a> -->
                            <!-- Dropdown - Alerts -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> -->

                        <!-- Nav Item - Messages -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i> -->
                                <!-- Counter - Messages -->
                                <!-- <span class="badge badge-danger badge-counter">9</span>
                            </a> -->
                            <!-- Dropdown - Messages -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li> -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$usuario?></span>
                                <?php if ($_SESSION['Perfil']=='1'){
                                echo    
                                '<img class="img-profile rounded-circle" src="img/undraw_profile_admin.svg">';
                                } else { echo '<img class="img-profile rounded-circle" src="img/undraw_profile_4.svg">';}
                                ?>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modificarPassword">
                                <i class="fas fa-key text-gray-400"></i>&nbsp;&nbsp;
                                    Cambiar Contraseña
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Resumen de Inventario</h1>
                    <p class="mb-4">Aqui encontrara un breve resumen del inventario.</p>
                    <img  src="img/inventory.jpg">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Inventory Control</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                            <th>Codigo o ID</th>
                                            <th>Producto</th>
                                            <th>Categoria</th>
                                            <th>Descripcion</th>
                                            <th>Marca</th>
                                            <th>Stock</th>
                                            <th>operatividad</th>
                                            <th>Fecha</th>
                                        </tr>
                                </thead>
                                <tfoot>
                                        <tr>
                                            <th>Codigo o ID</th>
                                            <th>Producto</th>
                                            <th>Categoria</th>
                                            <th>Descripcion</th>
                                            <th>Marca</th>
                                            <th>Stock</th>
                                            <th>operatividad</th>
                                            <th>Fecha</th>
                                        </tr>
                                </tfoot>
                                    <tbody>

                                    <?php
                                            include('conex.php');
                                            $consulta = "SELECT I.id_inventario, P.Nombre, C.Nombre, I.Descripcion, Marca ,Stock, Fecha
                                            FROM inventario I INNER JOIN producto P ON I.id_producto = P.id_producto
                                            INNER JOIN categoria C ON I.id_categoria = C.id_categoria ORDER BY Fecha DESC";
                                            $result = $con->query($consulta);

                                            while ($row = mysqli_fetch_row($result)){ ?>                                         
						
						                        <tr>
                                                    <td><?php echo $row[0]; ?></td>
                                                    <td><?php echo $row[1]; ?></td>
                                                    <td><?php echo $row[2]; ?></td>
                                                    <td><?php echo $row[3]; ?></td>
                                                    <td><?php echo $row[4]; ?></td>
                                                    <td><?php echo $row[5]; if ($row[5] >=0 and $row[5] <=40 ) echo "<td><div class='progress'>
  <div class='progress-bar bg-danger' role='progressbar' style='width: 18%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='50'></div>
</div></td>"; else if ($row[5] >=41 and $row[5] <=80 )  echo "<td><div class='progress'>
<div class='progress-bar bg-warning' role='progressbar' style='width: 40%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='50'></div>
</div></td>"; else if ($row[5] >=81 and $row[5] <=200 )  echo "<td><div class='progress'>
<div class='progress-bar bg-success' role='progressbar' style='width: 65%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='50'></div>
</div></td>"; else if ($row[5] >=201 and $row[5] <=1000 )  echo "<td><div class='progress'>
<div class='progress-bar bg-success' role='progressbar' style='width: 100%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='50'></div>
</div></td>"?></td>
                                                    <td><?php echo $row[6]; ?></td>
                                                </tr>
                                                                                                                                         
                                           <?php }
                                             mysqli_free_result($result);
                                             mysqli_close($con); ?>                           
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php
            
            include('modalRegisterInventario.php');
                    
            include('modalRegisterUser.php');
                
            include('modalRegisterProduct.php');    
    
            ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>    

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #4e73df !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            ¿Estas seguro que deseas finalizar la sesion?
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>            
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <a class="btn btn-primary" href="logOut.php">Aceptar</a>
            </div>
       </form>

    </div>
  </div>
</div>

<!-- Fin Logout Modal-->

<!--ventana para Update Password--->
<div class="modal fade" id="modificarPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #4e73df !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Modificar Contraseña
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="modifyPassword.php">

      <input type="hidden" name="id_usuario" value="<?=$ID?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Password:</label>
                  <input type="password" minlength="6" name="P1" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Password" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Confirmar Password:</label>
                  <input type="password" minlength="6" name="P2" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Password" required="true">
                </div>
                
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update Password--->

<?php include('modalRegisterCateg.php'); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- Page restriction scripts -->
    <script src="vendor/jquery/funciones.js"></script>

    

</body>

</html>