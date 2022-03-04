<!-- Ventana Modal Registrar Categoria-->
<div class="modal fade" id="registerModalCategoria1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #4e73df !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Registrar Categoria
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="insertcategoria1.php" onsubmit="return validarForma(this)">
          

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label"><b>Nombre:</b></label>
                  <input type="text" name="Nombre" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Ingrese el nombre de la Categoria" required="true">
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Registrar Categoria --->