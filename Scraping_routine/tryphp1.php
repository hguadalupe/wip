<?php

/* $homepage = file_get_contents('http://www.elpais.com/'); */


/* $linkhtml= file_get_contents('http://www.elpais.com/'); */

$html = file_get_html('http://www.elpais.com/');

foreach($html->find('h2') as $element) 
       echo $element->innertext . '<br>';

$html->find('icon', 0)->innertext;
	   
/*  */
$hoy = date("m-d-y");

$list = $hoy .",". $html .","."\r\n";

$handle = fopen("file.csv", "a");

fwrite($handle,$list);

fclose($handle);
?>