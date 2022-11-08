<?php

$temanfavorit = ['FUHMI','HASAN','ZIDAN','YOGA','HAIKAL','REDI','FAJAR','FAYI','ARJUN','PISKAL'];
echo "10 TEMAN KONYOL";
echo "<br>";
print_r($temanfavorit);
echo "<br>";
echo "<br>";
echo "<hr>";

echo "2 TEMAN KONYOL";
echo "<br>";
array_push($temanfavorit, "ADI", "FATHIR");
echo $temanfavorit [0];
echo "<br>";
echo $temanfavorit [2];
echo "<br>";
echo "<br>";
echo "<hr>";

echo "total";
echo "<br>";
print_r($temanfavorit);
echo "<hr>";

?>