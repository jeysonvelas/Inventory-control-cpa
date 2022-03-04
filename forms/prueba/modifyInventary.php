<html>

<head>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

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

$ID = $_REQUEST['id_inventario'];

if (isset($_POST['id_inventario'])) {
$id_usuario = $_POST['id_usuario'];
$id_producto = $_POST['id_producto'];
$id_categoria = $_POST['id_categoria'];
$id_descripcion = $_POST['id_descripcion'];
$id_marca = $_POST['id_marca'];
$id_stock = $_POST['id_stock'];
$Evento = "Modificacion";


//Guardamos en la Base de datos los registros antes que sean modificados
$insertar = "INSERT INTO reporte (id_usuario, id_inventario, Producto, Categoria, Descripcion, Marca, Stock, Evento) VALUES ( ".$id_usuario.", ".$ID.", '".$id_producto."', '".$id_categoria."', '".$id_descripcion."', '".$id_marca."', ".$id_stock.", '".$Evento."')";

  if($con->query($insertar)=== TRUE){

    $IDS = $_REQUEST['id_inventario'];

  if (isset($_POST['id_inventario'])) {
    $id_productos = $_POST['Producto'];
    $id_categorias = $_POST['Categoria'];
    $Descripcion = $_POST['Descripcion'];
    $Marcas = $_POST['Marca'];
    $Stock = $_POST['Stock'];

    $con->query("update inventario set id_producto='".$id_productos."', id_categoria='".$id_categorias."', Descripcion='".$Descripcion."', Marca='".$Marcas."', Stock=".$Stock."  where id_inventario = '".$IDS."'") or die($con->error);
    echo "<script>

    function mostrar() {

      if($Stock <= 40){
    
        Swal.fire({
          title: 'Modificacion Exitosa, tenga cuidado inventario critico',
          showDenyButton: false,
          confirmButtonText: 'Ok',
          icon: 'warning',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarInventario.php';
          }
        })
      } else if($Stock >= 41 && $Stock <=80){
    
      Swal.fire({
        title: 'Modificacion Exitosa, tenga cuidado inventario Bajo',
        showDenyButton: false,
        confirmButtonText: 'Ok',
        icon: 'info',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarInventario.php';
        }
      })
    } else if($Stock >=81){
    
      Swal.fire({
        title: 'Modificacion Exitosa, Mantenga asi el inventario',
        showDenyButton: false,
        confirmButtonText: 'Ok',
        icon: 'success',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarInventario.php';
        }
      })
    }
    
    }
    
    mostrar();
    
    </script>";  
    
  }else{
  
  
    echo "<script>Swal.fire('hola');</script>"; 
    
    // "<script type='text/javascript'>
    // alert('Error al Modificar el inventario, vuelva a intentarlo');
    // window.location='http://localhost:8080/Inventory%20control%20cpa/forms/prueba/consultarInventario.php';
    // </script>";
  
  }

}

}


?>



</body>


</html>

