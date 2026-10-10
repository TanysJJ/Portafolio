<?php
    $conexion=mysqli_connect("localhost","root","","bd1") or die("Problemas en la conexion");

    mysqli_query($conexion,"INSERT INTO clientes(nombre,ap,am,email) VALUES ('$_POST[nombre]','$_POST[ap]','$_POST[am]','$_POST[email]')")
    or die("Problemas en el seelect".mysqli_error());

    mysqli_close($conexion);
    echo "Cliente Registrado";
?>