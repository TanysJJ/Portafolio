<?php
$respuestas = array("a", "c", "b");
$puntuacion = 0;

if ($_POST['pregunta1'] == $respuesta[0]) {
    $puntuacion++;
}
if ($_POST['pregunta2'] == $respuesta[1]) {
    $puntuacion++;
}
if ($_POST['pregunta3'] == $respuesta[2]) {
    $puntuacion++;
}
echo "<h2>Tu puntuacion es: $puntuacion /3 </h2>";
?>