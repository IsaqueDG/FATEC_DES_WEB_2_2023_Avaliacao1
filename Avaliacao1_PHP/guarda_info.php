<?php

$titulo=$_POST['titulo'];
$volume=$_POST['volume'];
$autor=$_POST['autor'];

$filename = "list_produtos.txt";
if(!file_exists($filename)){
    $handle=fopen($filename, "w");
} else {
    $handle=fopen($filename, "a");
}

if(fwrite($handle,$titulo."\n") && fwrite($handle,$volume."\n") && fwrite($handle,$autor."\n")) {
    flush();
}
fclose($handle);
    
$handle=fopen($filename,"r");
while(!feof($handle)){
    $line = fgets($handle);
    echo $line. "<br>";
}

fclose($handle);    
?>