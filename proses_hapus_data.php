<?php 
include 'koneksi.php';

$query="DELETE FROM modul WHERE modul_id='".$_GET['modul_id']."'";

$sql = mysqli_query($conn, $query);
if (!$sql) {
	die ('ERROR: Data gagal dihapus dari tabel' . mysqli_error($conn));
}

header("Location: ./modul.php?pesan=berhasil_hapus");
?>