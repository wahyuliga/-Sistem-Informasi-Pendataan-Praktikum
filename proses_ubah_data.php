<?php

include 'koneksi.php';
session_start();

if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
}

if(isset($_POST['ubah'])){
    if ($_SESSION['role']=="asisten") {
        $password = md5($_POST['password']);
        $query="UPDATE asisten SET nama_asisten='".$_POST['nama']."',password='".$password."' WHERE NIM='".$_POST['nim']."'";
    } else {
        $password = md5($_POST['password']);
        $query="UPDATE praktikan SET nama_praktikan='".$_POST['nama']."',password='".$password."' WHERE NIM='".$_POST['nim']."'";
    }

    $sql = mysqli_query($conn, $query);

    if (!$sql) {
        die ('ERROR: Data gagal diedit' . mysqli_error($conn));
    }

    if ($_SESSION['role']=="asisten") {
        header("Location: ./asisten.php?pesan=sukses_update");
    } else {
        header("Location: ./index.php?pesan=sukses_update");
    }
    
}
?>