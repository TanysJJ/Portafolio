<!DOCTYPE html>
<html>
<head>
        <title>Practica 4</title>
        <meta charset="utf-8">
</head>
    <body>
        <h1>Registro de Productos</h1>

        <form method="post" action="regisp4p2.php">

            <fieldset> 

            <legend>Ingresar datos</legend><br><br>

                Folio del producto<br>

                <input type="text" name="folio" placeholder="Folio"><br><br>

                Nombre del producto<br>

                <input type="text" name="nombre" placeholder="Producto"><br><br>

                Existencias del producto<br>

                <input type="text" name="existe" placeholder="Existencia"><br><br>

                Precio del producto<br>

                <input type="text" name="precio" placeholder="Precio"><br><br>
                
                Costo del producto<br>

                <input type="text" name="costo" placeholder="Costo"><br><br>


                 <input type="submit" name="enviar" value="Registrar"><br>
                 <input type="reset" value="Restablecer"><br>

            </fieldset>

            </form>
            
            <form method="post" action="listaProdu.php">

            <fieldset> 

            <legend>Mostrar todos los registros</legend><br><br>

            Todos los registros<br>


            <input type="submit" value="Mostrar todo"><br><br>  

            </fieldset>

         </form>
                

    </body>

</html>
