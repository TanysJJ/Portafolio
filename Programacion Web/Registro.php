<!DOCTYPE html>
<html>
<head>
        <title>Registro en base de datos</title>
        <meta charset="utf-8">
</head>
    <body>
        <h1>Formulario</h1>
        <form method="post" action="guardar.php">
            <fieldset> 
            <legend>Ingresa Valores </legend>
                Escribe tu nombre:<br>
                <input type="text" name="nombre" placeholder="Nombre"><br><br>

                Escribe tu apellido paterno:<br>
                <input type="text" name="ap" placeholder="Apellido paterno"><br><br>

                Escribe tu apellido materno:<br>
                <input type="text" name="am" placeholder="Nombre"><br><br>

                Escribe tu E-mail:<br>
                <input type="email" name="email" placeholder="Correo"><br><br>

                <input type="submit" name="enviar" value="Guardar Registro"><br>
            </fieldset>
    </body>

</html>