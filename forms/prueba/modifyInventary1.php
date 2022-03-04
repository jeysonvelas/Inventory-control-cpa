<?php

include('conexPrueba.php');

$ID = $_REQUEST['id_inventario'];

  if (isset($_POST['id_inventario'])) {
    $id_producto = $_POST['Producto'];
    $id_categoria = $_POST['Categoria'];
    $Descripcion = $_POST['Descripcion'];
    $Marca = $_POST['Marca'];
    $Stock = $_POST['Stock'];

    $con->query("update inventario set id_producto='".$id_producto."', id_categoria='".$id_categoria."', Descripcion='".$Descripcion."', Marca='".$Marca."', Stock=".$Stock."  where id_inventario = '".$ID."'") or die($con->error);
    echo "<script type='text/javascript'>
    window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarInventarioPrueba.php';
    </script>";
  
    
  }else{
  
  
    echo "<script type='text/javascript'>
    alert('Error al Modificar el inventario, vuelva a intentarlo');
    window.location='http://localhost/Inventory%20control%20cpa/forms/prueba/consultarInventarioPrueba.php';
    </script>";
  
  }

?>