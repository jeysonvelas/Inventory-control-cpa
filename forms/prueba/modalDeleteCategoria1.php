<!--ventana para Delete Categoria--->
<div class="modal fade" id="deleteModalCategoria1<?php echo $row[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #DE151B !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            ¿Estas seguro que deseas eliminar esta Categoria?
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="deleteCategoria1.php">

      <input type="hidden" name="id_categoria" value="<?php echo $row[0]; ?>">
            
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-danger">Aceptar</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Delete --->