<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-with, initial-scale=1.0">
    <tittle>Ejemplo cookies y php equipo2</title>
</head>
<body>
    <form action="cookies.php" method="post">
        <label for="usuario">Nombre de Usuario:</label>
        <input type="text" name="usuario" id="usuario" value="<?php echo $_COOKIE['nombreusuario'??'';?>]">
        <br>
        <input type="checkbox" name="rcordar" id="recordar">
        <label for="recordar"> Recordarme </label>
        <input type="submit" name ="submit" value="Ingresar">
    </form>
</body>

</html>