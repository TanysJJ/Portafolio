<!DOCTYPE html>
<html>
<head>
        <title>Arreglo en PHP</title>
        <meta charset="utf-8">
</head>
    <body>
        <?php

       ECHO "Arreglos en PHP <br><br><br>";
       $dias[0]="Domingo";
       $dias[1]="Lunes";
       $dias[2]="Martes";
       $dias[3]="Miercoles";

       ECHO "Dia: ".$dias[0]. "<br>";
       ECHO "Dia: ".$dias[1]. "<br>";
       ECHO "Dia: ".$dias[2]. "<br>";
       ECHO "Dia: ".$dias[3]. "<br>";

       ECHO "<br><br><br>";
       ECHO "Arreglo 2 <br><br><br>";

       $dias= array("Domingo","Lunes","Martes","Miercoles"," Jueves","Viernes","Sabado");
       
       $j=1;
       for($i=0;$i<7;$i++)
       {
        //ECHO "Dia ".$i." : ".$dias[$i]. "<br>";
        $j=1+$i;//se incementa el numero de indice para que se imprima desde el numero 1
        ECHO "Dia $j : $dias[$i]  <br>";//imprime los dias de nuestro arreglo con su numero de indice
       }

       ECHO "<br><br><br>";
       ECHO "Imprimir dia actual <br><br><br>";
       $numdia=date("j");//j es para el numero del dia actual
       $num_dia=date("w");//imprime el dia actual, w es el formato en el que se desea imprimir el dato
       $mes=date("F");
       $anio=date("o");
       ECHO "Hoy es : $dias[$num_dia] $numdia  de $mes del $anio <br><br>";//imprime el dia actual en la posicion corresponidente a nuestro arreglo
       //ECHO "Hoy es : $numdia";
        ?>
    </body>

</html>