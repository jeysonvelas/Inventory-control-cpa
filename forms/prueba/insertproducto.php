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
$descripcion = $_POST['Descripcion'];


$buscarUsuario = "SELECT * FROM producto
WHERE nombre = '$nombre' ";

$result = $con->query($buscarUsuario);

$count = mysqli_num_rows($result);

if ($count == 1){
	echo "<script type='text/javascript'>
     alert('El producto ya se encuentra registrado, por favor ingrese otro nombre de producto');
     window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/paneladministrativo.php';
     </script>"; 
}else{
	$query = "INSERT INTO producto (Nombre, Descripcion) VALUES ('".$nombre."', '".$descripcion."')";
	if ($con->query($query) === TRUE) {
	 echo "<script type='text/javascript'>
     window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarProducto.php';
     </script>"; 

	}else{
		echo "Error al registrar el producto." . $query . "<br>" . $con->error;
	}
}
mysqli_close($con);
?>