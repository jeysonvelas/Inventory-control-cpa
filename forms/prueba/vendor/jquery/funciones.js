const datos = () => {

  Swal.fire({
    title: 'Registro Exitoso?',
    showDenyButton: false,
    confirmButtonText: 'Ok',
    icon: 'success',
  }).then((result) => {
    if (result.isConfirmed) {
      window.location="http://localhost:8080/Inventory%20control%20cpa/forms/prueba/consultarUsuario.php";
    }
  })

  
}
      