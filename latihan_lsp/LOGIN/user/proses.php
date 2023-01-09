<?php

session_start();
include '../koneksi_anggota.php';

// Menangkap data dan dicocockan pada table admin xampp
$email = $_POST['email'];
$password = $_POST['pass'];

// Menyeleksi data dan mencocokan pada table admin xampp
$data = mysqli_query($koneksi, "select * from anggota where email='$email' and password='$password'");

// Menghitung jumlah data yg ditemukan
$cek_data = mysqli_num_rows($data);

if($cek_data > 0){
    $_SESSION['status'] = 'login';
    $_SESSION['email'] = $email;
    header("location:index.php");
}else{
    // header("location:login.php?pesan=gagal");
    var_dump($_SESSION);
}
?>