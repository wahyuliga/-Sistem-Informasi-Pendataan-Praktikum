<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Praktikums - Login</title>

    <!-- Custom fonts for this template-->
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="card col-lg-6 border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                </div>
                                    <?php 
                                        if(isset($_GET['pesan'])){
                                            if($_GET['pesan'] == "gagal"){
                                                echo 
                                                '<div class="alert alert-danger" role="alert">
                                                    Login gagal! NIM atau password salah!
                                                </div>';
                                            }else if($_GET['pesan'] == "logout"){
                                                echo 
                                                '<div class="alert alert-success" role="alert">
                                                    Anda telah berhasil logout
                                                </div>';
                                            }else if($_GET['pesan'] == "belum_login"){
                                                echo 
                                                '<div class="alert alert-danger" role="alert">
                                                    Anda harus login terlebih dahulu
                                                </div>';
                                            }else if($_GET['pesan'] == "berhasil_register"){
                                                echo 
                                                '<div class="alert alert-success" role="alert">
                                                    Berhasil Register
                                                </div>';
                                            }
                                        }
                                    ?>

                                    <ul class="nav nav-tabs">
                                        <li class="nav-item col-lg-6">
                                            <a data-toggle="tab" class="nav-link active" href="#asisten">Asisten</a>
                                        </li>
                                        <li class="nav-item col-lg-6">
                                            <a data-toggle="tab" class="nav-link" href="#praktikan">Praktikan</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="asisten" class="tab-pane active">
                                            <br>
                                            <form class="user" method="post" action="cek_login.php">
                                                <div class="form-group">
                                                    <input type="hidden" name="asisten">
                                                    <input type="text" class="form-control form-control-user"
                                                        id="exampleInputNIM" name="NIM" placeholder="NIM">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user"
                                                        id="exampleInputPassword" name="password" placeholder="Password">
                                                </div>
                                                <input type="submit" value="Login Sebagai Asisten" class="btn btn-danger btn-user btn-block">
                                            </form>
                                        </div>
                                        <div id="praktikan" class="tab-pane fade">
                                            <br>
                                            <form class="user" method="post" action="cek_login.php">
                                                <div class="form-group">
                                                    <input type="hidden" name="praktikan">
                                                    <input type="text" class="form-control form-control-user"
                                                        id="exampleInputNIM" name="NIM" placeholder="NIM">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user"
                                                        id="exampleInputPassword" name="password" placeholder="Password">
                                                </div>
                                                <input type="submit" value="Login Sebagai Praktikan" class="btn btn-primary btn-user btn-block">
                                            </form>
                                        </div>
                                    </div>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="register.php">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>