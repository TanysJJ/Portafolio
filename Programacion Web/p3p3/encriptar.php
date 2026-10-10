<!DOCTYPE html>
<html lang=es>

<head>
        <meta charset ="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Ecriptador de Texto</title>
</head>
<body>
    <h1>Encriptador de texto</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="texto_plano">Ingrese el texto a encriptar:</label>
        <textarea id="texto_plano" name="texto_plano" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Encriptar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $texto_plano=$_POST["texto_plano"];
    
    $clave="clave_secreta";
    $algoritmo="ase-256-cbc";
    $iv=openssl_random_pseudo_bytes(16);
    $texto_encriptado=openssl_encrypt($texto_plano,$algoritmo,$clave,0,$iv);
    echo "<h2>Texto encriptado<h2>";
    echo "<p>$texto_encriptado</p>";

    $texto_desencriptado=openssl_decrypt($texto_encriptado,$algoritmo,$clave,0,$iv);
    echo "<h2>Texto desencriptado<h2>";
    echo "<p>$texto_desencriptado</p>";
}
    ?>
</body>
</html>