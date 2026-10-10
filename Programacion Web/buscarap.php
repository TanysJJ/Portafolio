<?php

    $conexion=mysqli_connect("localhost","root","","bd1") or die("Problemas en la conexion");

    $registros=mysqli_query($conexion,"SELECT id, nombre, ap, am, email FROM clientes WHERE ap = '$_POST[ap]'")
    or die("Problemas en el seelect".mysqli_error());

    while($reg=mysqli_fetch_array($registros))
    {
        ECHO "Id: ".$reg['id']."<br>";
        ECHO "Nombre: ".$reg['nombre']."<br>";
        ECHO "Apellido Paterno: ".$reg['ap']."<br>";
        ECHO "Apellido Materno: ".$reg['am']."<br>";
        ECHO "E-mail: ".$reg['email']."<br>";
    }

    mysqli_close($conexion);
?>