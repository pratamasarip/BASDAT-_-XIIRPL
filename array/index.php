<?php
// array adalah tipe data yang berisi beberapa tipe data (string maupun integer)
// keynya diambil dengan angka 0 dst

// array asosiatif
// keyknya berubah menjadi tipe data string

$siswa = [
    // keynya bisa int/string
    'sipalingwibu' => 'ADI',
    'sipalingaerox' => 'FAHMI',
    'sipalingCOD' => 'FATHIR',
];

echo "siapa yang paling wibu? {$siswa['sipalingwibu']}";

// Array Multidimention
// Ada array di dalam array

$togel = [
    [1,2,3,4,5],
    [6,7,8,9,22],
    [12,15,13,14,51],
    [19,21,31,47,35]
];

// cara memanggil array 
echo $togel[2][3];

// array push
// array push berguna untuk menerima 2 parameter, parameter pertama : perameter kedua untuk nilai yang akan dimasukan 

$sayur = ['bayem','kangkung','sawi'];
$buah = ['apel','pisang','kelapa'];

// cara pertama untuk menambahkan item
array_push($buah,'timun');

// cara yang kedua
$sayur[] = 'labu';

echo $buah[3];
echo $sayur[3];

?>