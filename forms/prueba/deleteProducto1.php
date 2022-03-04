<?php
//Generamos la conexión a la base de datos por medio de la importación de conex.php
include('conexPrueba.php');

//Obtenemos la variable para la ejecución y busqueda del registro
$ID = $_REQUEST['id_producto'];

//Realizamos el query de eliminación del registro
$buscarUsuario= "DELETE FROM producto WHERE id_producto = '$ID' ";

//Ejecutamos y validamos la instrucción
if($con->query($buscarUsuario)=== TRUE){
	echo "<script type='text/javascript'>
	window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarProductoPrueba.php';
	</script>";
}else{
	echo "<script type='text/javascript'>
	alert('Error al eliminar el producto, vuelva a intentarlo');
	window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarProductoPrueba.php';
	</script>";
}

//Cerramos la conexión a la base de datos
mysqli_close($con);
?>