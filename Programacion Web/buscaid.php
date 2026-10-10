<?php

    $conexion=mysqli_connect("localhost","root","","bd1") or die("Problemas en la conexion");

    $registros=mysqli_query($conexion,"SELECT id, nombre, ap, am, email FROM clientes WHERE id = '$_REQUEST[id]'")
    or die("Problemas en el seelect".mysqli_error());

    if($reg=mysqli_fetch_array($registros))
    {
        ECHO "Id: ".$reg['id']."<br>";
        ECHO "Nombre: ".$reg['nombre']."<br>";
        ECHO "Apellido Paterno: ".$reg['ap']."<br>";
        ECHO "Apellido Materno: ".$reg['am']."<br>";
        ECHO "E-mail: ".$reg['email']."<br>";
    }
    else
    {
        ECHO "No existe el Registro";

    }
    mysqli_close($conexion);
?>