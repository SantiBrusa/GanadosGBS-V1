<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganados GBS - Registrar Noticia</title>
    <link rel="stylesheet" href="css/registraroferta.css">
    <link rel="icon" href="img/logoredondo.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <div>
            <img src="img/logoredondo.png" alt="Logo" width="60px">

        </div>
        <div>
            <h1>Registrar Noticia</h1>
        </div>

        <div class="bottom">
            <a href="dashboard_admin.php">INICIO</a>
        </div>
    </header>

    <?php
        // Incluye el archivo con la función
        include 'guardar_noticia.php';

        // Verifica si se envió el formulario y llama a la función guardarEnBaseDeDatos
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Crea una instancia de la clase Noticia con los datos del formulario
         $noticia = new Noticia(1, $_POST['titulo'], $_POST['imagen'], $_POST['descripcion']);
        $noticia->guardarEnBaseDeDatos();
        }
    ?>

    <main>
        <form action="" method="POST">
            <div class="formulario2">
                <div class="campus2">
                    <label for="titulo">Titulo:</label>
                    <input name="titulo" type="text" required>
                </div>
                <div class="campus2">
                    <label for="descripcion">Descripción:</label>
                    <input name="descripcion" type="text" required>
                </div>
                <div class="campus2">
                    <label for="imagen">URL de la Imagen:</label>
                    <input name="imagen" type="text" required>
                </div>
                <div class="bottom2">
                    <input type="submit" value="Guardar">
                </div>
            </div>
        </form>

    </main>
</body>

</html>