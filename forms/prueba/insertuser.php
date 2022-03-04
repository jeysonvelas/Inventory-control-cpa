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

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$correo = $_POST['Email'];
$telefono = $_POST['Telefono'];
$password=hash('sha512', '73b0c0eeb6e3b347a4c32822293c71c72dafa8f5b08961c1811ab4025fdf06a5dbf27b3b3200a7731b65ca36ff80a743'.$_POST['Password']);
$perfil = $_POST['Perfil'];


$buscarUsuario = "SELECT * FROM tbl_usuarios
WHERE email = '$correo' ";

$result = $con->query($buscarUsuario);

$count = mysqli_num_rows($result);

if ($count == 1){
	echo "<script type='text/javascript'>
     alert('Usuario ya se encuentra registrado con ese correo; por favor proporcione otro correo');
     window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/paneladministrativo.php';
     </script>"; 
}else{
	$query = "INSERT INTO tbl_usuarios (Nombre, Apellido, Email, Telefono, Password, Perfil) VALUES ('".$nombre."', '".$apellido."', '".$correo."', '".$telefono."', '".$password."', '".$perfil."')";
	if ($con->query($query) === TRUE) {

          echo "<script>Swal.fire({
            title: 'Registro de Usuario Exitoso',
            showDenyButton: false,
            confirmButtonText: 'Ok',
            icon: 'success',
          }).then((result) => {
            if (result.isConfirmed) {
              window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarUsuario.php';
            }
          })</script>";

	}else{
		echo "Error al crear el usuario." . $query . "<br>" . $con->error;
	}
}
mysqli_close($con);
?>

</body>

</html>