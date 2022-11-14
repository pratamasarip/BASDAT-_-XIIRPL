<?php
// Prosedural adalah pemograman yang tidak perlu adanya instansiasi, cukup menggunakan fungsi

// contoh dari prosedural
echo date('d-m-Y');// fungsi tanpa objek 

 // contoh dari pendekatan objek
 $date = new DateTime();//objek 
 echo $date->format('d-m-Y');
?>