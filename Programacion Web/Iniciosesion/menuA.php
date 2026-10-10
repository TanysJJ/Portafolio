<?php
session_start();
if ($_SESSION["auntentificado"] != "SI") {
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
                <li class="dropdown">
                    <a href="#">Clientes</a>
                    <ul class="dropdown-menu">
                        <li><a href="Registro.php">Registro de clientes</a></li>
                        <li><a href="Listado.php">Listado de registros</a></li>
                        <li><a href="Busqueda.php">Busqueda de registros</a></li>
                        <li><a href="borrado.php">Eliminacion de registros</a></li>
                        <li><a href="borradoLogico.php">Baja de registros</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Capacitadores</a>
                    <ul class="dropdown-menu">
                        <li><a href="Registro.php">Registro de clientes</a></li>
                        <li><a href="Listado.php">Listado de registros</a></li>
                        <li><a href="Busqueda.php">Busqueda de registros</a></li>
                        <li><a href="borrado.php">Eliminacion de registros</a></li>
                        <li><a href="borradoLogico.php">Baja de registros</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Cursos</a>
                    <ul class="dropdown-menu">
                        <li><a href="Registro.php">Registro de clientes</a></li>
                        <li><a href="Listado.php">Listado de registros</a></li>
                        <li><a href="Busqueda.php">Busqueda de registros</a></li>
                        <li><a href="borrado.php">Eliminacion de registros</a></li>
                        <li><a href="borradoLogico.php">Baja de registros</a></li>
                    </ul>
                </li>
                <li>
                <li><a href="logoff.php">Cerrar sesion</a></li>
            </ul>
        </nav>
        <div class="logo-container">
            <img src="logo.jpg" alt="Logo de CapacitaT">
        </div>
    </header>

    <main>
    <table >
  <tr>
    <td>
      <img src="logo3.png" alt="IMG1">
    </td>
    <td class="micelda">
      <h2>Bienvenido Administrador</h2>
      <p>Usted podra editar, eliminar, agregar desactivar "usuarios" clientes y capacitadores y cuarsos</p>
    </td>
  </tr>
  </table>

    </main>

    <footer>
        <p>DESARROLLADORA JIMENEZ JUAREZ TANYA</p>
    </footer>

</body>

</html>