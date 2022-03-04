<!--ventana para Update--->
<div class="modal fade" id="modificarModalUser<?php echo $row[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #4e73df !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Modificar datos del usuario
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="modifyUser.php">

      <input type="hidden" name="id_usuario" value="<?php echo $row[0]; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre:</label>
                  <input type="text" name="Nombre" class="form-control" value="<?php echo $row[1]; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Apellido</label>
                  <input type="text" name="Apellido" class="form-control" value="<?php echo $row[2]; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Correo:</label>
                  <input type="email" name="Email" class="form-control" value="<?php echo $row[3]; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Telefono:</label>
                  <input type="text" name="Telefono" class="form-control" value="<?php echo $row[4]; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Perfil:</label>
                  Admin Inventario &nbsp;<input type="radio" name="Perfil" <?php if ($row[6] == 2) echo "checked";?> value="2"> &nbsp; Visualizador <input type="radio" name="Perfil" <?php if ($row[6] == 3) echo "checked";?> value="3">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Password:</label>
                  <input type="password" minlength="6" name="P1" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Confirmar Password:</label>
                  <input type="password" minlength="6" name="P2" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Password">
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