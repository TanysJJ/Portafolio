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
        <label for="tp">Ingrese el texto a encriptar:</label><br>
        <textarea id="tp" name="tp" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Encriptar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    
    $t_p=$_POST["tp"];
    
    $c="clave_secreta";

    $a="aes-256-cbc";
    $iv=  openssl_random_pseudo_bytes(16);
    

    $te=openssl_encrypt($t_p, $a,$c,0,$iv);

    echo "<h2>Texto encriptado<h2>";
    echo "<p>$te</p>";

    $td=openssl_decrypt($te,$a,$c,0,$iv);

    echo "<h2>Texto desencriptado<h2>";
    echo "<p>$td</p>";
}
    ?>
</body>
</html>