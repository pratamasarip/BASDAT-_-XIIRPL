<?php

require 'helper/fungsi-validasi.php';

// tambahkan rules masing masing jenis form nya

$rules =[
    'nama' => ['required'],
    'email' => ['required', 'email'],
    'username' => ['required', 'username'],
    'usia' => ['required', 'numeric'],
];

$errors = validasi($rules);

// echo "<pre>";
// print_r($errors);
// echo "</pre>";

//disini kita bisa meklakukan proses yg harus di lakukan jika idak terjadi error validasi apapun

if(count($errors) > 0){
    $time = $_REQUEST;
    $queryString = http_build_query([
        'error' => $errors,
        'time' => $old
    ]);

    header("location: form.php?{$queryString}");
    die();

}

?>