<!DOCTYPE html>
<html>
<head>
        <title>Actualizar datos en la base de datos</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
    <body>
    <main>
                        <section>
                                <div class="grid">
                                        <div>
                                                <form id="form1" method="post" action="mostrar.php">
                                                        <input type="submit" value=" Registros 1 a 50"><br><br>
                                                </form>

                                                <form id="form2" method="post" action="buscarid.php">
                                                        <label for="id">Busqueda por ID</label><br><br>
                                                        <input type="text" name="id" placeholder="ID"><br><br>
                                                        <input type="submit" value="Buscar Por Id"><br><br>
                                                </form>

                                                <form id="form3" method="post" action="buscargoogle.php">
                                                        <input type="submit" value="Personas con email de Google"><br><br>
                                                </form>

                                                <form id="form4" method="post" action="buscarap.php">
                                                        <input type="submit" value="Personas con apellidos Douglas o Mathews"><br><br>
                                                </form>
                                        </div>

                                        <div id="dataContainer"></div>
                                </div>

                        </section>
                </main>

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