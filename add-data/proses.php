<?php

include 'koneksi.php';

// menangkap ada yang ada di from
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

// menginput database
mysqli_query($koneksi,"insert into anggota values('','$nama','$no_telp','$alamat','$email','')");

// membalikan ke halaman awal
header("location:tambah.php");
?>