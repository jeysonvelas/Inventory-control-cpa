<?php
//Generamos la conexión a la base de datos por medio de la importación de conex.php
include('conexPrueba.php');

//Obtenemos la variable para la ejecución y busqueda del registro
$ID = $_REQUEST['id_inventario'];



	$elim= "DELETE FROM inventario WHERE id_inventario = '$ID' ";
	($con->query($elim));
	if($con->query($elim)=== TRUE){
	echo "<script type='text/javascript'>
	window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarInventarioPrueba.php';
	</script>";

	
}else{


	echo "<script type='text/javascript'>
	alert('Error al eliminar el inventario, vuelva a intentarlo');
	window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarInventarioPrueba.php';
	</script>";

}

//Cerramos la conexión a la base de datos
mysqli_close($con);
?>