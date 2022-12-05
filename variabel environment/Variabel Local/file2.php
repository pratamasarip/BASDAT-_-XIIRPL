<?php

$nama = "Pratama Syarief"; /* variabel global */

function haloDunia () {
  $nama = "Salim"; # variabel lokal
  echo $nama . '<br>'; # Wahid Abdullah
}

haloDunia();

echo $nama; # Nurul Huda