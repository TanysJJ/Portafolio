<?php

    $conexion=mysqli_connect("localhost","root","","bd1") or die("Problemas en la conexion");

    $registros=mysqli_query($conexion,"SELECT * FROM productos")
    or die("Problemas en el seelect".mysqli_error());

    while($reg=mysqli_fetch_array($registros))
    {
        ECHO "Folio: ".$reg['folio']."<br>";
        ECHO "Nombre: ".$reg['nombre']."<br>";
        ECHO "Existencias: ".$reg['existencia']."<br>";
        ECHO "Precio: ".$reg['precio']."<br>";
        ECHO "costo: ".$reg['costo']."<br>";
        ECHO "<br><br>";
    }
    
    mysqli_close($conexion);
?>