<!-- Ventana Modal Registro Inventario-->
<div class="modal fade" id="registroModalInventario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #4e73df !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Registrar Inventario
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="insertinventario.php">

      <input type="hidden" name="id_usuario" value="<?php echo $ID ?>">
          

            <div class="modal-body" id="cont_modal">

            <!-- Listar la lista de productos, que se encuentran registrados -->
                <div class="form-group">
                <label for="recipient-name" class="col-form-label"><b>Productos:</b></label>
                <?php

include('conex.php');
                                            
$consulta = "SELECT `id_producto`, `Nombre` FROM producto ORDER BY Nombre ASC";
$result = $con->query($consulta);
mysqli_close($con); ?>

<select name="Producto" id="Producto" class="form-control" required="true">


<?php

if($result > 0){

while ($prod = mysqli_fetch_array($result)){ ?>




<option value="<?php echo $prod['id_producto']; ?>"><?php echo $prod['Nombre']; ?></option>


<?php }
} ?>
</select>
</div>

<!-- Fin del listar productos -->

                <!-- Listar la lista de categorias, que se encuentran registradas -->
                <div class="form-group">
                <label for="recipient-name" class="col-form-label"><b>Categorias:</b></label>
                <?php

include('conex.php');
                                            
$consulta = "SELECT `id_categoria`, `Nombre` FROM categoria ORDER BY Nombre ASC";
$result = $con->query($consulta);
mysqli_close($con); ?>

<select name="Categoria" id="Categoria" class="form-control" required="true">


<?php

if($result > 0){

while ($categ = mysqli_fetch_array($result)){ ?>




<option value="<?php echo $categ['id_categoria']; ?>"><?php echo $categ['Nombre']; ?></option>


<?php }
} ?>
</select>
</div>

<!-- Fin del listar Categorias -->

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label"><b>Descripcion:</b></label>
                  <input type="text" name="Descripcion" class="form-control form-control-user"
                                             placeholder="Ingrese la descripcion del producto" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label"><b>Marca Y referencia:</b></label>
                  <input type="text" name="Marca" class="form-control form-control-user"
                                             placeholder="Ingrese la Marca y referencia del producto" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label"><b>Stock:</b></label>
                  <input type="number" name="Stock" min="30" class="form-control form-control-user"
                                             placeholder="Ingrese la cantidad del producto" required="true">
                </div>               
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>

<!---fin ventana Modal Registro Inventario --->