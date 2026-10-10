<!DOCTYPE html>
<html>

<head>
        <title>Eliminacion en base de datos</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
        <h1>Actualizar clientes</h1>
        <div>
                <div>
                        <form id="form1" method="post" action="updateuser.php">
                                Activar usuario<br>
                                <input type="text" name="id" placeholder="ID del cliente"><br><br>
                                <input type="text" name="act" placeholder="1 o 0"><br><br>
                                <input type="submit" name="enviar" value="Actualizar"><br>

                        </form>
                        <form id="form2" method="post" action="mostraract.php">
                                Mostrar usuarios activos<br>
                                <input type="submit" name="enviar" value="Mostrar"><br>
                        </form>
                        <form id="form3" method="post" action="mostrarinact.php">
                                Mostrar usuarios inactivos<br>
                                <input type="submit" name="enviar" value="Mostrar"><br>
                        </form>

                </div>
                <div id="dataContainer1"></div>

        </div>

        <script>
                $(document).ready(function() {

                        $('#form1 input[type="submit"]').click(function(a) {
                                a.preventDefault();

                                var id = $('#form1 input[name="id"]').val();

                                $.ajax({
                                        url: 'updateuser.php',
                                        method: 'post',
                                        data: {
                                                id: id
                                        },
                                        success: function(data) {
                                                $('#dataContainer1').html(data);
                                        }
                                });

                        });

                        $('#form2 input[type="submit"]').click(function(e) {
                                e.preventDefault();

                                $.ajax({
                                        url: 'mostraract.php',
                                        method: 'post',
                                        success: function(data) {
                                                $('#dataContainer1').html(data);
                                        }
                                });
                        });
                        $('#form3 input[type="submit"]').click(function(e) {
                                e.preventDefault();

                                $.ajax({
                                        url: 'mostrarinact.php',
                                        method: 'post',
                                        success: function(data) {
                                                $('#dataContainer1').html(data);
                                        }
                                });
                        });
                });
        </script>
</body>

</html>