<?php
session_start();

if ($_SESSION['login'] == 'true') {
    $usuario = $_SESSION['Nombre'];
} else {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html><!-- Autor Jeyson Velasquez -->
<head>
<title>Menu Empleados</title>
</head>
<link rel="stylesheet" href="../assets/css/estilos.css">
<link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">

<body background="..\assets\img\php\portada.jpg" ><h1 style="color: #C0392B" align="center"> Menu Principal </h1>
    <!-- <h2><a style="color:white;">Usuario:<?= $usuario ?></a></h2> -->

<div id="header">
<ul class="nav">

<?php
    if ($_SESSION['Perfil']=='1'){
        echo '<li><a style="color:white;" href="./registromenus.php">Insertar menus</a></li>
    <li><a style="color:white;" href="./vermenus.php">Ver menus registrados</a></li>
    <li><a style="color:white;" href="./register.php">Registro de usuario</a></li>
    <li><a style="color:white;" href="./logOut.php"> Cerrar Sesion <i class="icofont-user-suited"></i></a></li>
</ul>';}else{ echo '<li><a style="color:white;" href="./registromenus.php">Insertar menus</a></li>
    <li><a style="color:white;" href="./vermenus.php">Ver menus registrados</a></li>
    <li><a style="color:white;" href="./control/verregistros.php">Solicitudes/permisos</a></li>
    <li><a style="color:white;" href="./logOut.php">Cerrar Sesion <i class="icofont-user"></i></a></li>
</ul>';}?>
</div><br /><br />
<p class="centrado">
<img src="..\assets\img\slide\slide-4.png" />
</p>
</body>
</html>
     