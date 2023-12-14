<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logoredondo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/singStyle.css">
    <title>Ganados GBS - Iniciar Sesión</title>
</head>

<body class="body">

    <header class="header">

    </header>

    <main class="main">

        <div id="login-form">
            <h2>Iniciar Sesión</h2>
            <form id="form" action="procesar_login.php" method="POST">
                <label for="username">Correo Electrónico:</label>
                <input type="text" id="username" name="username" placeholder="Ingresa tu correo" required>
                <br>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                <div id="forgot-password">
                    <a href="#">¿Has olvidado tu contraseña?</a>
                </div>
                <br>
                <button type="submit">Confirmar</button>
                <button type="button" onclick="cancelar()">Cancelar</button>
            </form>
        </div>

    </main>

    <script>
        function cancelar() {
            // Redirigir al usuario a index.html
            window.location.href = "index.php";
        }
    </script>
</body>

</html>
