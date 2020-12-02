<?php
include 'koneksi.php';
if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
}
$query="UPDATE modul SET nama_modul='".$_POST['nama']."',modul_date='".$_POST['param']."',kode_matkul='".$_POST['matkul']."' WHERE modul_id='".$_POST['id']."'";



mysqli_query($conn, $query);

if (!$query) {
	die ('ERROR: Data gagal diedit' . mysqli_error($conn));
}


	header("Location: ./modul.php?pesan=sukses_update");


?>