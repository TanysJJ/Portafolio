<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Concert+One&family=Protest+Revolution&family
    =Protest+Riot&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" 
    rel="stylesheet">
    
    <title>login con cokies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background:#4EAAAE;
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            position: relative;
            /* Agregado para permitir el posicionamiento absoluto del título */
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        h1 {
            position: absolute;
            /* Posicionamiento absoluto */
            top: 10%;
            /* Ajusta la posición vertical del título */
            left: 50%;
            /* Centra horizontalmente el título */
            transform: translateX(-50%);
            /* Centra horizontalmente el título */
        }

        .roboto-black-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 1900px;
            font-style: italic;
        }



        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            /* Aumenta el espacio interno */
            border-radius: 20px;
            /* Ajusta la redondez de los bordes */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            /* Añade una sombra al contenedor */
            width: 400px;
            /* Aumenta el ancho del contenedor */
            text-align: center;
            position: relative;
        }

        .logo-container {
            position: absolute;
            top: -60px;
            /* Ajusta la posición vertical del contenedor del logo */
            left: calc(50% - 50px);
            /* Ajusta la posición horizontal del contenedor del logo */
        }

        .login-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form class="login-form" action="cookie.php" method="post">

            <label>Usuario:</label>
            <input type="text" name="usuario" required>

            <label>Contraseña:</label>
            <input type="password" name="password" required>

            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>

</html>