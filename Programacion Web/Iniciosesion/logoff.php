<?php
session_start();
$_SESSION["autentificado"]=NULL;
header("Location:iniciarsesion.php?id_administrador=NULL");
session_destroy();
?>