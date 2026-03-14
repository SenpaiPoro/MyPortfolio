<?php
require '../config/function.php';

if (isset($_SESSION['username'])){
    header('Location: ../Portfolio/index.php ');
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container d-flex align-items-center justify-content-center min-vh-100">

    <div class="col-xl-8 col-lg-10 col-md-12">
        <div class="card shadow-lg border-0">
            <div class="card-body p-0">
                <div class="row no-gutters">

                    <!-- Image Side -->
                    <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center">
                        <img src="../Portfolio/assets/MyPicture.png" 
                             class="img-fluid" 
                             style="max-height: 420px;">
                    </div>

                    <!-- Form Side -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="p-5 w-100">

                            <div class="text-center mb-4">

                                    <?= alertMessage(); ?>

                                <h1 class="h4 text-gray-900">Welcome Marlon!</h1>
                            </div>

                            <form action="../config/code.php" method="POST" class="user">
                                <div class="form-group">
                                    <input name="username" type="email" class="form-control form-control-user"
                                           placeholder="Enter Email Address...">
                                </div>

                                <div class="form-group">
                                    <input name="password" type="password" class="form-control form-control-user"
                                           placeholder="Password">
                                </div>

                                <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>

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