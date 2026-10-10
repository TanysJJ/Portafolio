<!DOCTYPE html>
<html>
<head>
        <title>Eliminacion en base de datos</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
    <body>
        <h1>Borrar clientes o Actualizar estado del cliente</h1>
        <div>
        <div>
        <form id="form1" method="post" action="seleccion.php">
                Que quiere realizar<br>
                <input type="submit" name="enviar" value="Activar o Inactivar clientes"><br>
               
        </form>
        <form id="form2" method="post" action="seleccion2.php">
                <input type="submit" name="enviar" value="Borrar clientes"><br>
        </form>
        </div>
        <div id="dataContainer"></div>

        </div>

        <script>
        $(document).ready(function() {
    $('#form1 input[type="submit"]').click(function(e) {
        e.preventDefault();

        var buttonValue = $(this).val();
        if (buttonValue === "Activar o Inactivar clientes") {
            $.ajax({
                url: 'seleccion.php',
                method: 'post',
                success: function(data) {
                    $('#dataContainer').html(data);
                }
            });
        }
    });

    $('#form2 input[type="submit"]').click(function(e) {
        e.preventDefault();

        $.ajax({
            url: 'seleccion2.php',
            method: 'post',
            success: function(data) {
                $('#dataContainer').html(data);
            }
        });
    });
});
                </script>

    </body>

</html>