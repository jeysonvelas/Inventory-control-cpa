<?php

include('conexPrueba.php');

$ID = $_REQUEST['id_producto'];

if (isset($_POST['Nombre'])) {
	$nombre = $_POST['Nombre'];
	$descripcion = $_POST['Descripcion'];
	
		$con->query("update producto set Nombre='".$nombre."', Descripcion='".$descripcion."' where id_producto = '".$ID."'") or die($con->error);

		echo "<script type='text/javascript'>
        window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarProductoPrueba.php';
        </script>";

		}


?>