<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio de sesion</title>

    <!-- Favicons -->
  <link href="/Inventory control cpa/assets/img/login.png" rel="icon">
  <link href="/Inventory control cpa/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body background="./img/php/backgroundLogin.jpg">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                                    </div>
                                    
                                    <form action="validacionLogin.php" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Ingrese el correo electronico...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="Password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group">
                                            <!-- <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordar</label>
                                            </div> -->
                                        </div>
                                        <input type="submit" value ="Iniciar sesion" class="btn btn-primary btn-user btn-block">
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.php">Olvidaste la contraseña?</a>
                                    </div> -->
                                     <div class="text-center">
                                        <a class="small" href="/Inventory control cpa/index.php">Volver a la pagina principal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>