
<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$conexion=mysqli_connect('localhost','root','','bd1') or die(mysqli_error($conexion));
$consulta="SELECT id FROM usuarios WHERE user='$usuario' AND pass='$password'";
$result = mysqli_query($conexion, $consulta) or die('La consulta ha fallado:'. mysqli_error($conexion));
$id_tipouser = NULL;
while($row = mysqli_fetch_array($result))
{
    $id_tipouser = $row["id"];
}
if(mysqli_num_rows($result)!=0){
    session_start();
    $_SESSION["auntentificado"] = "SI";
    header("Location:salir.php?cat=$id_tipouser");
}
else{
    header("Location:no_acceso_admi.php");
}
mysqli_free_result($result);
mysqli_close( $conexion );
?>

