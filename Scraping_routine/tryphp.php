<?php

$hoy = date("m-d-y");

$list = $hoy .","."12".","."\r\n";

$handle = fopen("autocsv.csv", "a");

fwrite($handle,$list);

fclose($handle);
?>