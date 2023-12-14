<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registrarcomisionista.css">
    <link rel="icon" href="img/logoredondo.png" type="image/x-icon">

    <title>Ganados GBS - Registrar Agente</title>
</head>

<body>
    <header class="header">
        <div>
            <img src="img/logoredondo.png" alt="Logo" width="60px">
        </div>
        <div>
            <h1>Registrar Comisionista</h1>
        </div>

        <div class="bottom">
            <a href="dashboard_admin.php">INICIO</a>
        </div>
    </header>

    <?php
        // Incluye el archivo con la función
        include 'guardar_comisionista.php';

        // Verifica si se envió el formulario y llama a la función guardarEnBaseDeDatos
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Crea una instancia de la clase Noticia con los datos del formulario
        $comisionista = new comisionista(1, $_POST['name'], $_POST['image'], $_POST['text'], $_POST['gmail']);
        $comisionista->guardarEnBaseDeDatos();
        }
    ?>

    <main>
        <form action="" method="POST">
            <div class="formulario2">
                <div class="campus2">
                    <label for="name"> Nombre del Comisionista:</label>
                    <input name="name" type="text" required>
                </div>
                <div class="campus2">
                    <label for="text">Descripción:</label>
                    <input name="text" type="text" required>
                </div>
                <div class="campus2">
                    <label for="image">URL de la foto de perfil:</label>
                    <input name="image" type="text" required>
                </div>
                <div class="campus2">
                    <label for="gmail">Gmail:</label>
                    <input name="gmail" type="Email" required>
                </div>
                <div class="bottom2">
                    <input type="submit" value="Guardar">
                </div>
            </div>
        </form>
    </main>
</body>

</html>
