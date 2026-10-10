<!DOCTYPE html>
<html>
<head>
        <title>Eliminacion en base de datos</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
    <body>
        <h1>Borrar cliente</h1>
        <div>
        <div>
        <form id="form1" method="post" action="mostrarid.php">
                Escribe la ID<br>
                <input type="text" name="id" placeholder="ID del cliente"><br><br>
                <input type="submit" name="enviar" value="Mostrar"><br>
        </form>
        </div>
        <div id="dataContainer1"></div>

        </div>

        <script>
                       $('#form1 input[type="submit"]').click(function(a) {
                                        a.preventDefault();

                                        var id = $('#form1 input[name="id"]').val();

                                        $.ajax({
                                                url: 'mostrarid.php',
                                                method: 'post',
                                                data: {
                                                        id: id
                                                },
                                                success: function(data) {
                                                        $('#dataContainer1').html(data);
                                                }
                                        });
                                        
                                });

                </script>
    </body>

</html>