<?php

$hoy = date("m-d-y");

$list = $hoy .","."\r\n";

$handle = fopen("file.csv", "a");

fwrite($handle,$list);

fclose($handle);
?>