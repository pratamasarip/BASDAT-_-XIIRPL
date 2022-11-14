<?php

$warnaterang = ['kuning','hijau','pink'];
$warnagelap = ['hitam','abu-abu','cokelat'];

// Gabungkan 2 array tersebut menjadi 1
$warna_warna = array_merge($warnaterang,$warnagelap);

// Array_merge bisa dutamahkan lebih dari 2
$semua_warna = array_merge(
    $warnaterang,
    $warnagelap,
    ['Magenta','Cyan','Hijau kelabu']
);
// unpacking untuk mengekstrak array
$list_buah_lokal = ['magga','rambutan'];
$list_buah = ['kurma','anggur', $list_buah_lokal,'kismis'];

// kurma, anggur, mangga, rambutan, kismis

// explode array berfungsi memecah-belah string lalu diubah ke dalam array

// explode ada 2 parameter : delimiter(pemisah), string sasaran (sasaran yang akan pecah menjadi array )

$siswa = "andi budi dono kasino indro";
// var_dump(explode(" ", $siswa));

// inpload fungsi kembalikannya expload
// inpload dia 2 parameter : qlue (penggabung), array sasaran (sasran yang akan kita gabung menjadi string)

$siswa_pintar = ['Adi','Fathir','Fahmi'];//array 
$siswa_jago = implode('  ',$siswa_pintar);//string
?>
