<html>


<head>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>


<body>

<?php
session_start();

if ($_SESSION['login'] == 'true') {
    $usuario = $_SESSION['Nombre'];
} else {
  header('Location: ./login.php');
}

?>

<?php

include('conex.php');

$ID = $_REQUEST['id_usuario'];

if (isset($_POST['id_usuario'])) {
	$p1= $_POST['P1'];
    $p2= $_POST['P2'];

		
	  	$p1=hash('sha512', '73b0c0eeb6e3b347a4c32822293c71c72dafa8f5b08961c1811ab4025fdf06a5dbf27b3b3200a7731b65ca36ff80a743'.$_POST['P1']);
      	$p2=hash('sha512', '73b0c0eeb6e3b347a4c32822293c71c72dafa8f5b08961c1811ab4025fdf06a5dbf27b3b3200a7731b65ca36ff80a743'.$_POST['P2']);
		
		if($p1 == $p2){


		//$query = "update tbl_usuarios set Nombre='".$nombre."', Apellido='".$apellido."', Email='".$email."', Telefono='".$telefono."', Perfil='".$perfil."', Password='".$p1."' where id_usuario = '".$ID."'";		
	
		$con->query("update tbl_usuarios set Password='".$p1."' where id_usuario = '".$ID."'") or die($con->error);	
		
		echo "<script>Swal.fire({
            title: 'Cambio de Contraseña Exitosa',
            showDenyButton: false,
            confirmButtonText: 'Ok',
            icon: 'success',
          }).then((result) => {
            if (result.isConfirmed) {
                window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/paneladministrativo.php';
            }
          })</script>";

		}else{

            echo "<script>Swal.fire({
                title: 'las contraseñas no coinciden',
                showDenyButton: false,
                confirmButtonText: 'Ok',
                icon: 'success',
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/paneladministrativo.php';
                }
              })</script>";        
        
		}


	}
	


?>

</body>

</html>