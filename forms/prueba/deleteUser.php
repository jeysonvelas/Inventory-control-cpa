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
$ID = $_REQUEST['id_usuario'];

//Realizamos el query de eliminación del registro
$buscarUsuario= "DELETE FROM tbl_usuarios WHERE id_usuario = '$ID' ";

//Ejecutamos y validamos la instrucción
if($con->query($buscarUsuario)=== TRUE){
	echo "<script type='text/javascript'>
	window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarUsuario.php';
	</script>";
}else{
	echo "<script type='text/javascript'>
	alert('Error al eliminar el Usuario, vuelva a intentarlo');
	window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarUsuario.php';
	</script>";
}

//Cerramos la conexión a la base de datos
mysqli_close($con);
?>