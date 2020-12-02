<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$NIM = $_POST['NIM'];
$password = md5($_POST['password']);

if (isset($_POST['praktikan'])) {
    $query = "select * from praktikan where NIM='$NIM' and password='$password'";
} elseif (isset($_POST['asisten'])) {
    $query = "select * from asisten where NIM='$NIM' and password='$password'";
}

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn, $query);
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$row = mysqli_fetch_array($data);

if($cek > 0){
    if (isset($_POST['praktikan'])) {
        $_SESSION['nim'] = $row['NIM'];
        $_SESSION['username'] = $row['nama_praktikan'];
        $_SESSION['role'] = "praktikan";
        $_SESSION['status'] = "login";
	    header("location:index.php");
    } elseif (isset($_POST['asisten'])) {
        $_SESSION['nim'] = $row['NIM'];
        $_SESSION['username'] = $row['nama_asisten'];
        $_SESSION['role'] = "asisten";
        $_SESSION['status'] = "login";
	    header("location:asisten.php");
    }
}else{
	header("location:login.php?pesan=gagal");
}
?>