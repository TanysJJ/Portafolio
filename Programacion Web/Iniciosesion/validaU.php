<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$conexion=mysqli_connect('localhost','root','','capacitat') or die(mysqli_error($conexion));
$consulta="SELECT Rol_ID FROM usuarios WHERE Nombre_Usuario='$usuario' AND Contraseña='$password'";
$result = mysqli_query($conexion, $consulta) or die('La consulta ha fallado:'. mysqli_error($conexion));
$id_tipouser = NULL;
while($row = mysqli_fetch_array($result))
{
    $id_tipouser = $row["Rol_ID"];
}
if(mysqli_num_rows($result)!=0){
    session_start();
    $_SESSION["auntentificado"] = "SI";
    header("Location:menuA.php?Rol_ID=$id_tipouser");
}
else{
    header("Location:no_acceso_admi.php");
}
mysqli_free_result($result);
mysqli_close( $conexion );
?>
