<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganados GBS - Registrar Raza</title>
    <link rel="stylesheet" href="css/registrarraza.css">
    <link rel="icon" href="img/logoredondo.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <div>
            <img src="img/logoredondo.png" alt="Logo" width="60px">
        </div>
        <div>
            <h1>Registrar Raza</h1>
        </div>

        <div class="bottom">
            <a href="dashboard_admin.php">INICIO</a>
        </div>
    </header>

    <?php
        // Incluye el archivo con la función
        include 'guardar_raza.php';

        // Verifica si se envió el formulario y llama a la función guardarEnBaseDeDatos
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Crea una instancia de la clase Raza con los datos del formulario
         $raza = new Raza(1, $_POST['name'], $_POST['image'], $_POST['text']);
        $raza->guardarEnBaseDeDatos();
        }
    ?>

    <main>
        <form action="" method="POST">
        <div class="formulario2">
            <div class="campus2">
                <label for="name"> Nombre de la raza:</label>
                <input name="name" type="text" required>
            </div>
            <div class="campus2">
                <label for="text">Descripción:</label>
                <input name="text" type="text" required>
            </div>
            <div class="campus2">
                <label for="image">URL de la imagen:</label>
                <input name="image" type="text" required>
            </div>
            <div class="bottom2">
                <input type="submit" value="Guardar">
            </div>
        </div>
        </form>
    </main>
</body>
