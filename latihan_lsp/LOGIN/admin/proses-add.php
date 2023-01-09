<?php

include '../koneksi.php';

// menangkap ada yang ada di from
$id_katalog = $_POST['id_katalog'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];

// menginput database
$notif = mysqli_query($koneksi,"insert into buku values('','$id_katalog','$judul_buku','$pengarang','$thn_terbit','$penerbit')");

if($notif){
    ?>
    <script>
        alert('Data Berhasil');
        window.location='index.php';
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Data Gagal');
        window.location='index.php';
    </script>
    <?php
}
?>