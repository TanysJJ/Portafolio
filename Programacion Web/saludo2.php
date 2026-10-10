<?php
$archivo=fopen("saludo.txt","r") or die("Error al abrir el el archivo");
while(!feof($archivo))
{
    $texto=fgets($archivo);
    $salto=nl2br($texto);
    echo $salto;

}
fclose($archivo);
?>