<!DOCTYPE html>
<html>
<head>
    <title>Practica 4</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Listado de Productos</h1>

    <fieldset> 
        <legend>Mostrar todos los registros</legend><br><br>
        Todos los registros<br>
        <button id="mostrarTodo">Mostrar todo</button><br><br>  
    </fieldset>

    <div id="registros">
        <!-- Aquí se mostrarán los registros -->
    </div>

    <script>
        $(document).ready(function(){
            $('#mostrarTodo').click(function(){
                $.ajax({
                    url: 'listaProdu.php',
                    type: 'POST',
                    success: function(response) {
                        $('#registros').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
