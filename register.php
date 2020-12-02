<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Praktikums - Register</title>

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
                                    <h1 class="h4 text-gray-900 mb-4">Register Sekarang</h1>
                                </div>
                                <?php

                                    require_once("koneksi.php");

                                    if(isset($_POST['register'])){

                                        // filter data yang diinputkan
                                        $nim = filter_input(INPUT_POST, 'nim', FILTER_SANITIZE_STRING);
                                        $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
                                        // enkripsi password
                                        $password = md5($_POST["password"]);

                                        // menyiapkan query
                                        if($_POST["role"]=="asisten"){
                                            $sql = "INSERT INTO asisten (NIM, nama_asisten, password) 
                                                    VALUES ('$nim', '$nama', '$password')";
                                        } else {
                                            $sql = "INSERT INTO praktikan (NIM, nama_praktikan, password) 
                                                    VALUES ('$nim', '$nama', '$password')";
                                        }

                                        $data = mysqli_query($conn, $sql);
                                        
                                        // jika query simpan berhasil, maka user sudah terdaftar
                                        // maka alihkan ke halaman login
                                        if($data) {
                                            header("Location: login.php?pesan=berhasil_register");
                                        }
                                    }

                                ?>

                                <form class="user" method="post" action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            id="exampleInputNIM" name="nim" placeholder="NIM" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            id="exampleInputNama" name="nama" placeholder="Nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Daftar Sebagai:</label>
                                        <select class="form-control" name="role">
                                            <option value="asisten">Asisten</option>
                                            <option value="praktikan">Praktikan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"
                                            id="exampleInputPassword" name="password" placeholder="Password" required>
                                    </div>
                                    <input type="submit" name="register" value="Register" class="btn btn-primary btn-user btn-block">
                                </form>
                                <hr>
                                <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
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