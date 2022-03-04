<?php
//Generamos la conexión a la base de datos por medio de la importación de conex.php
include('conexPrueba.php');

//Obtenemos la variable para la ejecución y busqueda del registro
$ID = $_REQUEST['id_categoria'];

//Realizamos el query de eliminación del registro
$buscarUsuario= "DELETE FROM categoria WHERE id_categoria = '$ID' ";

//Ejecutamos y validamos la instrucción
if($con->query($buscarUsuario)=== TRUE){
	echo "<script type='text/javascript'>
	window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarCategoriaPrueba.php';
	</script>";
}else{
	echo "<script type='text/javascript'>
	alert('Error al eliminar la categoria, vuelva a intentarlo');
	window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarCategoriaPrueba.php';
	</script>";
}

//Cerramos la conexión a la base de datos
mysqli_close($con);
?>