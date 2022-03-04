<?php
session_start();

if ($_SESSION['login'] == 'true') {
	$usuario = $_SESSION['Nombre'];
} else {
	header('Location: ./login.php');
}

?>
<?php
//Generamos la conexión a la base de datos por medio de la importación de conex.php
include('conex.php');

//Obtenemos la variable para la ejecución y busqueda del registro
$ID = $_REQUEST['id_inventario'];

if (isset($_POST['id_inventario'])) {
$id_usuario = $_POST['id_usuario'];
$id_producto = $_POST['id_producto'];
$id_categoria = $_POST['id_categoria'];
$id_descripcion = $_POST['id_descripcion'];
$Marca = $_POST['Marca'];
$id_stock = $_POST['id_stock'];
$Evento = "Eliminacion";


//Guardamos en la Base de datos los registros eliminados
$insertar = "INSERT INTO reporte (id_usuario, id_inventario, Producto, Categoria, Descripcion, Marca, Stock, Evento) VALUES ( ".$id_usuario.", ".$ID.", '".$id_producto."', '".$id_categoria."', '".$id_descripcion."', '".$Marca."', ".$id_stock.", '".$Evento."')";


//Ejecutamos y validamos la instrucción
if($con->query($insertar)=== TRUE){

	$elim= "DELETE FROM inventario WHERE id_inventario = '$ID' ";
	($con->query($elim));
	echo "<script type='text/javascript'>
	window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarInventario.php';
	</script>";

	
}else{


	echo "<script type='text/javascript'>
	alert('Error al eliminar el inventario, vuelva a intentarlo');
	window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarInventario.php';
	</script>";

}

}

//Cerramos la conexión a la base de datos
mysqli_close($con);
?>