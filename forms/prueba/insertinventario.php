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

$id_usuario = $_POST['id_usuario'];
$id_producto = $_POST['Producto'];
$id_categoria = $_POST['Categoria'];
$Descripcion = $_POST['Descripcion'];
$Marca = $_POST['Marca'];
$Stock = $_POST['Stock'];


$buscarUsuario = "SELECT * FROM inventario WHERE 
id_producto = '$id_producto' and id_categoria = '$id_categoria' and Marca = '$Marca' ";

$result = $con->query($buscarUsuario);

$count = mysqli_num_rows($result);

if ($count == 1){
	echo "<script type='text/javascript'>
          alert('El producto que esta inventariando, ya se encuentra en el inventario; por favor ingrese otro producto');
          window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/paneladministrativo.php';
     </script>"; 
}else{
	$query = "INSERT INTO inventario (id_usuario, id_producto, id_categoria, Descripcion, Marca, Stock) VALUES (".$id_usuario.", ".$id_producto.", ".$id_categoria.", '".$Descripcion."', '".$Marca."', ".$Stock.")";
	if ($con->query($query) === TRUE) {
	 echo "<script type='text/javascript'>
          window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarInventario.php';
      </script>"; 

	}else{
		echo "Error al Registrar el inventario" . $query . "<br>" . $con->error;
	}
}
mysqli_close($con);
?>