<?php

include('conexPrueba.php');

$ID = $_REQUEST['id_categoria'];

if (isset($_POST['Nombre'])) {
	$nombre = $_POST['Nombre'];
	
		$con->query("update categoria set Nombre='".$nombre."' where id_categoria = '".$ID."'") or die($con->error);

		echo "<script type='text/javascript'>
        window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarCategoriaPrueba.php';
        </script>";

		}


?>