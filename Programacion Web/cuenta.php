<?php
$archivo ="contador.txt";//se declara la variable para usar el archivo sin nesecidade de declarar todo
$abre = fopen($archivo,"r");//declaramos la funcion para abrir el archivo en modo lectura
$total = fread($abre,filesize($archivo));//se declara la funcion para leer el archivo, filesize devolvera el tamaño del archiv para ver hasta donde lee
fclose($abre);//se cierra el archivo 
while(!feof($archivo))
{
    $texto=fgets($archivo);
    $salto=nl2br($texto);
    echo $salto;

}
fclose($archivo);
?>