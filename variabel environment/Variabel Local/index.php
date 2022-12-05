<?php
// Variabel lokal hanya bisa di akses dari scope dimana dia di definisikan 

$nama = "          GOOD GAME";

function HalloDunia(){
    $nama = "Pak Saiful"; // Variabel lokal
    echo $nama;
}

HalloDunia();
echo $nama;
?>