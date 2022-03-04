<!--ventana para Update--->
<div class="modal fade" id="modificarModalProducto1<?php echo $row[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #4e73df !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Modificar datos del Producto
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="modifyProduct1.php">

      <input type="hidden" name="id_producto" value="<?php echo $row[0]; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre:</label>
                  <input type="text" name="Nombre" class="form-control" value="<?php echo $row[1]; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Descripcion</label>
                  <input type="text" name="Descripcion" class="form-control" value="<?php echo $row[2]; ?>" required="true">
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
<!---fin ventana Update --->