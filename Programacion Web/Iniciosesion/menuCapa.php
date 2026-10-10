<?php
session_start();
if ($_SESSION["auntentificado"] !="SI") 
{
    header("Location: iniciarsesion.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="logo3.png">
    <title>CapacitaT</title>
    <link rel="stylesheet" href="menuA.css">
</head>
<body>
<header>
    <nav class="menu">
        <ul class="menu-list">
            <li><a href="Registro.php">Registro de clientes</a></li>
            <li><a href="Listado.php">Listado de registros</a></li>
            <li><a href="Busqueda.php">Busqueda de registros</a></li>
            <li><a href="borrado.php">Eliminacion de registros</a></li>
            <li><a href="borradoLogico.php">Baja de registros</a></li>
            <li>
                <form name="cerrar" method="POST" action="logoff.php">
                <input type="submit" name="salir" value="Cerrar sesion">
            </li>
        </ul>
    </nav>
    <div class="logo-container">
        <img src="logo.jpg" alt="Logo de CapacitaT">
    </div>
</header>

<main>

</main>

<footer>
    <p>DESARROLLADORA JIMENEZ JUAREZ TANYA</p>
</footer>

</body>
</html>
