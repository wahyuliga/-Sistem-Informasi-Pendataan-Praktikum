<?php

session_start();
if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
}

include 'koneksi.php';
$table_name=$_POST['data'];

// query SQL untuk insert data

if ($_POST['data']=="modul") {
	$query="INSERT INTO modul SET nama_modul='".$_POST['nama']."',modul_date='".$_POST['waktu']."',kode_matkul='".$_POST['matkul']."'";
}

$sql = mysqli_query($conn, $query);

if (!$sql) {
	die ('ERROR: Data gagal dimasukkan pada tabel ' . $table_name . ': ' . mysqli_error($conn));
}

if ($_POST['data']=="modul") {
	header("Location: ./modul.php?pesan=sukses_tambah");
}
?>