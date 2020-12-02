<?php

session_start();
if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
}

include 'koneksi.php';

// query SQL untuk insert data

$sql="INSERT INTO praktikan_matkul SET NIM='".$_SESSION['nim']."',kode_matkul='".$_GET['kode_matkul']."'";



$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('ERROR: ' . mysqli_error($conn));
} else {
    header("location:index.php?pesan=berhasil_tambah");
}
?>