<?php
include 'koneksi.php';

$query="UPDATE asisten SET nama_asisten='".$_POST['nama']."',modul_id=".$_POST['modul_id']." WHERE NIM='".$_POST['nim']."'";

$sql = mysqli_query($conn, $query);

if (!$sql) {
	die ('ERROR: Data gagal diedit' . mysqli_error($conn));
} else{
	header("Location: ./asisten.php?pesan=sukses_update");
}

?>