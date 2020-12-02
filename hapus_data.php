<?php 
include 'koneksi.php';

if(isset($_GET['nim'])){
	$query="DELETE FROM asisten WHERE NIM='".$_GET['nim']."'";
} elseif(isset($_GET['id'])){
	$query="DELETE FROM praktikan_matkul WHERE id='".$_GET['id']."'";
}


$sql = mysqli_query($conn, $query);
if (!$sql) {
	die ('ERROR: Data gagal dihapus' . mysqli_error($conn));
}


if(isset($_GET['nim'])){
	header("Location: ./asisten.php?pesan=berhasil_hapus");
} elseif(isset($_GET['id'])){
	header("Location: ./index.php?pesan=berhasil_hapus");
}

?>