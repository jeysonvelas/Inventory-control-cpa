<?php
include('conexPrueba.php');

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
     window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarInventarioPrueba.php';
     </script>"; 
}else{
	$query = "INSERT INTO inventario (id_producto, id_categoria, Descripcion, Marca, Stock) VALUES (".$id_producto.", ".$id_categoria.", '".$Descripcion."', '".$Marca."', ".$Stock.")";
	if ($con->query($query) === TRUE) {
	 echo "<script type='text/javascript'>
     window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarInventarioPrueba.php';
     </script>"; 

	}else{
		echo "Error al crear el usuario." . $query . "<br>" . $con->error;
	}
}
mysqli_close($con);
?>