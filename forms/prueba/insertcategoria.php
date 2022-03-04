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


$buscarUsuario = "SELECT * FROM categoria
WHERE nombre = '$nombre' ";

$result = $con->query($buscarUsuario);

$count = mysqli_num_rows($result);

if ($count == 1){
	echo "<script type='text/javascript'>
     alert('La Categoria ya se encuentra registrada, por favor registre otra');
     window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/paneladministrativo.php';
     </script>"; 
}else{
	$query = "INSERT INTO categoria (Nombre) VALUES ('".$nombre."')";
	if ($con->query($query) === TRUE) {
	 echo "<script type='text/javascript'>
     window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarCategoria.php';
     </script>"; 

	}else{
		echo "Error al Registrar la Categoria" . $query . "<br>" . $con->error;
	}
}
mysqli_close($con);
?>