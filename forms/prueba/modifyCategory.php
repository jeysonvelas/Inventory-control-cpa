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

$ID = $_REQUEST['id_categoria'];

if (isset($_POST['Nombre'])) {
	$nombre = $_POST['Nombre'];
	
		$con->query("update categoria set Nombre='".$nombre."' where id_categoria = '".$ID."'") or die($con->error);

		echo "<script type='text/javascript'>
        alert('Modificacion exitosa');
        window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarCategoria.php';
        </script>";

		}


?>