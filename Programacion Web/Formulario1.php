<!DOCTYPE html>
<html>
<head>
        <title>Formulario saludo</title>
        <meta charset="utf-8">
</head>
    <body>
        <h1>Formulario</h1>
        <form method="post" action="saludo.php">
            <fieldset>
                <legend>Datos del usuario</legend>
                <label for="usuario">
                    Nombre
                </label><br>
                <input type="text" name="usuario" id ="usuario" placeholder="Nombre del usuario"><br>
                <input type="submit" name="envio" id="envio" value="Enviar" placeholder="Nombre del usuario"><br>
            </fieldset>
    </body>

</html>