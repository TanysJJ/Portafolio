<?php
echo "<style>";
echo "table { 
    margin: 20px auto; /* Margen superior e inferior de 20px y centrado horizontal */
    border-collapse: collapse; /* Colapso de bordes para que se vean como una sola línea */
    width: 90%; /* Ancho del 90% del contenedor */
}";
echo "th, td { 
    padding: 10px; /* Añade espacio interno a celdas */
    text-align: center; /* Alineación del texto en el centro */
    border: 1px solid #ddd; /* Borde de 1px sólido de color gris */
}";
echo "th { 
    background-color: #7FB3D5 ; /* Color de fondo para los encabezados */
}";
echo "</style>";

echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Nombre</th>";
echo "<th>Apellido Paterno</th>";
echo "<th>Apellido Materno</th>";
echo "<th>E-mail</th>";
echo "<th>Estado</th>";
echo "</tr>";

$conexion=mysqli_connect("localhost","root","","bd1") or die("Problemas en la conexion");

$registros = mysqli_query($conexion, "SELECT id,nombre, ap, am, email, estado FROM clientes WHERE id = '$_REQUEST[id]'")
    or die("Problemas en el select" . mysqli_error());

if ($reg = mysqli_fetch_array($registros)) {
    echo "<tr>";
    echo "<td>" . $reg['id'] . "</td>";
    echo "<td>" . $reg['nombre'] . "</td>";
    echo "<td>" . $reg['ap'] . "</td>";
    echo "<td>" . $reg['am'] . "</td>";
    echo "<td>" . $reg['email'] . "</td>";
    echo "<td>" . $reg['estado'] . "</td>";
    echo "</tr>";
} else {
    echo "<tr>";
    echo "<td colspan='6'>No existe el Registro</td>"; // Colspan para fusionar las celdas en una sola fila
    echo "</tr>";
}

echo "</table>";

mysqli_close($conexion);
?>
