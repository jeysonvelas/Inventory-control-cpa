<?php  

##Parametros  de conexion a la base de datos del aplicativo
$host="127.0.0.1";
$port=33065;
$socket="";
$user="root";
$password="";
$dbname="inventory";

if (!($con = new mysqli($host, $user, $password, $dbname, $port, $socket))){

	die ('No se puede Conectar a la Base de Datos' .mysqli_connect_error());
	
}
?>