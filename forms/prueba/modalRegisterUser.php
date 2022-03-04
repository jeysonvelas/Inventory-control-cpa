<!-- Register Modal-->
<html>

<head>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>


<body>

<div class="modal fade" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #4e73df !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Registrar Usuario
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="insertuser.php">
          

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label"><b>Nombre:</b></label>
                  <input type="text" name="Nombre" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Ingrese el nombre" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label"><b>Apellido:</b></label>
                  <input type="text" name="Apellido" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Ingrese el apellido" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label"><b>Correo:</b></label>
                  <input type="email" name="Email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Ingrese el correo electronico" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label"><b>Telefono:</b></label>
                  <input type="text" name="Telefono" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Ingrese el numero de telefono" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label"><b>Password:</b></label>
                  <input type="password" minlength="6" name="Password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Password" required="true">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label"><b>Perfil:</b></label>&nbsp;
                  Admin Inventario &nbsp;<input type="radio" name="Perfil" value="2" required="true"> &nbsp; Visualizador <input type="radio" name="Perfil" value="3" required="true"> 
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

</body>

</html>

<!---fin ventana Registrar Ususario --->