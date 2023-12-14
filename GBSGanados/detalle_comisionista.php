<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logoredondo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <title>Ganados GBS - Agente</title>
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
        max-width: 60%;
        max-height: 60%;
        margin-left: 4%;
        margin-top: 1%;
    }

    .img4 img {
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


                $comisionista_id = isset($_GET['id']) ? $_GET['id'] : null;

                if ($comisionista_id) {
                    // Crear conexión
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Verificar la conexión
                    if ($conn->connect_error) {
                        die("Error de conexión: " . $conn->connect_error);
                    }


                    $sql = "SELECT * FROM tb_comisionistas WHERE cod = $comisionista_id";
                    $result = $conn->query($sql);


                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo '<img src="' . $row['image'] . '" alt="Comisionista">';
                    } else {
                        echo '<p>No se encontró al comisionista.</p>';
                    }

                    // Cerrar la conexión
                    $conn->close();
                } else {
                    echo '<p>ID de comisionista no especificado.</p>';
                }
                ?>
            </div>

            <div class="text">
                <div class="title">
                    <?php

                    if ($comisionista_id) {
                        // Crear conexión
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Verificar la conexión
                        if ($conn->connect_error) {
                            die("Error de conexión: " . $conn->connect_error);
                        }


                        $sql = "SELECT * FROM tb_comisionistas WHERE cod = $comisionista_id";
                        $result = $conn->query($sql);


                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<h1>' . $row['name'] . '</h1>';
                        } else {
                            echo '<p>No se encontró al comisionista.</p>';
                        }

                        // Cerrar la conexión
                        $conn->close();
                    } else {
                        echo '<p>ID de comisionista no especificado.</p>';
                    }
                    ?>
                </div>

                <div class="desc">
                    <?php

                    if ($comisionista_id) {
                        // Crear conexión
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Verificar la conexión
                        if ($conn->connect_error) {
                            die("Error de conexión: " . $conn->connect_error);
                        }


                        $sql = "SELECT * FROM tb_comisionistas WHERE cod = $comisionista_id";
                        $result = $conn->query($sql);

                        // Verificar si se encontró la noticia
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<p>' . $row['text'] . '</p>';
                        } else {
                            echo '<p>No se encontró al comisionista.</p>';
                        }

                        // Cerrar la conexión
                        $conn->close();
                    } else {
                        echo '<p>ID de comisionista no especificado.</p>';
                    }
                    ?>
                </div>

                <?php
                if ($comisionista_id) {
                    // Imprimir el botón para enviar un correo al comisionista
                    echo '<a class="btn-gmail" href="mailto:' . $row['gmail'] . '">Enviar Correo</a>';
                }
                ?>

            </div>
        </div>
    </main>

</body>

</html>