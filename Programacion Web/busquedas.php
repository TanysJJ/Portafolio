<!DOCTYPE html>
<html>
<head>
        <title>Busqueda</title>
        <meta charset="utf-8">
</head>
    <body>
        <h1>Busquedas</h1>

        <form method="post" action="buscaid.php">

            <fieldset> 

            <legend>Buscar por ID</legend><br><br>

                Ingrese la ID<br>

                <input type="text" name="id" placeholder="ID"><br><br>

                <input type="submit" value="Buscar Registro"><br><br>

            </fieldset>

            </form>

            <form method="post" action="buscarap.php">

                <fieldset> 

                <legend>Buscar por Apellido</legend><br><br>

                    Ingrese el Apellido<br>

                    <input type="text" name="ap" placeholder="Apellido"><br><br>

                    <input type="submit" value="Buscar Registro"><br><br>  

                </fieldset>

            </form>
            
            <form method="post" action="mostrar.php">

            <fieldset> 

            <legend>Mostrar todos los registros</legend><br><br>

            Todos los registros<br>


            <input type="submit" value="Mostrar todo"><br><br>  

            </fieldset>

         </form>
                

    </body>

</html>