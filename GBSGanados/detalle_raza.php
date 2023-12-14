<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logoredondo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <title>Ganados GBS - Raza</title>
</head>

<style>
        /* Estilos CSS para la página de detalles de la noticia */
        .gnrl2 {
            display: flex;
            flex-direction: row;
            /* align-items: center;*/
            text-align: center;
        }

        /*.img4 img {
            max-width: 80%;
            max-height: 80%;
        }*/

        .title h1 {
            font-size: 36px;
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }

        .desc p {
            font-size: 18px;
            color: white;
            text-align: justify;
        }


        .img4 {
            display: flex;
            flex-direction: row;
            padding: 10px;
            background-color: #556d4a;
            max-width: 100%;
            max-height: 100%;
            margin-left: 4%;
            margin-top: 1%;
        }

        .img4 img{
            width: 580px;
            height: 620px;
        }

        .text {
            flex-direction: column;
            margin-top: 7%;
            
        }

        .title {
            text-align: center;
            color: rgb(209, 195, 195);
        }

        .desc {
            padding: 30px;
            color: rgb(209, 195, 195);
        }
    </style>

<body>

    <header class="header">
        <div>
            <img src="img/logoredondo.png" alt="Logo" width="60px">
        </div>

        <div class="bottom">
            <a href="index.php">INICIO</a>
        </div>
    </header>

    <main>
        <div class="gnrl2">
            <div class="img4">
                <?php
                // Configuración de la conexión a la base de datos
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "db_ganados";

                // Verificar si el ID de la noticia está definido en la URL
                $noticia_id = isset($_GET['id']) ? $_GET['id'] : null;

                if ($noticia_id) {
                    // Crear conexión
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Verificar la conexión
                    if ($conn->connect_error) {
                        die("Error de conexión: " . $conn->connect_error);
                    }

                    // Consulta SQL para obtener la noticia específica
                    $sql = "SELECT * FROM tb_razas WHERE cod = $noticia_id";
                    $result = $conn->query($sql);

                    // Verificar si se encontró la noticia
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo '<img src="' . $row['image'] . '" alt="Raza">';
                    } else {
                        echo '<p>No se encontró la raza.</p>';
                    }

                    // Cerrar la conexión
                    $conn->close();
                } else {
                    echo '<p>ID de noticia no especificado.</p>';
                }
                ?>
            </div>

            <div class="text">
                <div class="title">
                    <?php
                    // Verificar si el ID de la noticia está definido en la URL
                    if ($noticia_id) {
                        // Crear conexión
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Verificar la conexión
                        if ($conn->connect_error) {
                            die("Error de conexión: " . $conn->connect_error);
                        }

                        // Consulta SQL para obtener la noticia específica
                        $sql = "SELECT * FROM tb_razas WHERE cod = $noticia_id";
                        $result = $conn->query($sql);

                        // Verificar si se encontró la noticia
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<h1>' . $row['name'] . '</h1>';
                        } else {
                            echo '<p>No se encontró la raza.</p>';
                        }

                        // Cerrar la conexión
                        $conn->close();
                    } else {
                        echo '<p>ID de noticia no especificado.</p>';
                    }
                    ?>
                </div>

                <div class="desc">
                    <?php
                    // Verificar si el ID de la noticia está definido en la URL
                    if ($noticia_id) {
                        // Crear conexión
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Verificar la conexión
                        if ($conn->connect_error) {
                            die("Error de conexión: " . $conn->connect_error);
                        }

                        // Consulta SQL para obtener la noticia específica
                        $sql = "SELECT * FROM tb_razas WHERE cod = $noticia_id";
                        $result = $conn->query($sql);

                        // Verificar si se encontró la noticia
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<p>' . $row['text'] . '</p>';
                        } else {
                            echo '<p>No se encontró la raza.</p>';
                        }

                        // Cerrar la conexión
                        $conn->close();
                    } else {
                        echo '<p>ID de noticia no especificado.</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

</body>

</html>