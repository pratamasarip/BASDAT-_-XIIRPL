<?php

//mencob membuat fungsi yang ada parameter
function benda($tisu, $jumlah, $harga){
    echo"<h2> Saat aku menggunakan {$tisu}</h2>";
    echo"<h2> aku gunakan {$jumlah} satu lembar</h2>";
    echo"<h2> {$jumlah} harganya {$harga}</h2>";

}
benda('tisu','satu lembar','2000');

$P = ['saat','aku','menggunakan','tisu'];
$S = ['aku','gunakan','satu','lembar','satu','lembar'];
$H = ['satu','lembar','harganya','2000'];

$jumlah1 = count ($P);
$jumlah2 = count ($S);
$jumlah3 = count ($H);

var_dump($jumlah1);
echo "<br>";
var_dump($jumlah2);
echo "<br>";
var_dump($jumlah3);
echo "<br>";
