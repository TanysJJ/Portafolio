<!DOCTYPE html>
<html>
<head>
        <title>Formulario de envio</title>
        <meta charset="utf-8">
</head>
    <body>
        <h1>Envio</h1>
        <div>
            <from action="mensajero.php" method="post">

                <label for="nombre">Nombre de usuario</label><br>
                <input type="text" id="nombre" name="nombre" placeholder="User">
                <br><br>
                <label for="email">E-mail</label><br>
                <input type="email" id="email" name="email" placeholder="E-mail">
                <br><br>
                <label for ="mensaje">Comentario</label><br>
                <textarea id="mensaje" name="mensaje"></textarea>
                <br><br>
                <input type="submit" name="submit" valie="Enviar formulario">


            </from>
        </div>
    </body>

</html>