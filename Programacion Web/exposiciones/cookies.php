<?php
if(isset($$_POST['submit'])){
   $usuario =$_POST['usuario'];//verifica si el checkbox 'recordar' fue marcado y existe en el post 
   $recordar =isset($_POST['recordar'])&& $_POST['recordar'] =='on';
}