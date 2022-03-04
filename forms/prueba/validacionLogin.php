<html>

<head>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

<?php
include('conex.php');

$Correo_Electronico = $_POST['email'];
$Password = hash('sha512', '73b0c0eeb6e3b347a4c32822293c71c72dafa8f5b08961c1811ab4025fdf06a5dbf27b3b3200a7731b65ca36ff80a743'.$_POST['Password']);
$searchUser = "SELECT * FROM tbl_usuarios
WHERE email = '$Correo_Electronico' and Password = '$Password'";

$result = $con->query($searchUser);

$count = mysqli_num_rows($result);

if ($count === 1){    
    
     while ($row = mysqli_fetch_row($result)) {
            session_start();
            $_SESSION['id_usuario'] = $row[0];
            $_SESSION['Perfil'] = $row[6];
            $_SESSION['Nombre'] = $row[1];
            $_SESSION['login'] = 'true';            

	header('location: paneladministrativo.php');
    	
}

}else{

    echo "<script>Swal.fire({
        title: 'Error en Usuario o Contraseña?',
        showDenyButton: false,
        confirmButtonText: 'Regresar',
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/login.php';
        }
      })</script>"; 

    }

mysqli_close($con);
?>

</body>



</html>

