<!--ventana para Delete--->
<div class="modal fade" id="deleteModalInventario<?php echo $row[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #DE151B !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            ¿Estas seguro que deseas eliminar este Inventario?
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="deleteInventario.php">

      <input type="hidden" name="id_usuario" value="<?php echo $ID ?>">
      <input type="hidden" name="id_inventario" value="<?php echo $row[0]; ?>">
      <input type="hidden" name="id_producto" value="<?php echo $row[1]; ?>">
      <input type="hidden" name="id_categoria" value="<?php echo $row[2]; ?>">
      <input type="hidden" name="id_descripcion" value="<?php echo $row[3]; ?>">
      <input type="hidden" name="Marca" value="<?php echo $row[4]; ?>">
      <input type="hidden" name="id_stock" value="<?php echo $row[5]; ?>">
      

            
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-danger">Aceptar</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Delete --->