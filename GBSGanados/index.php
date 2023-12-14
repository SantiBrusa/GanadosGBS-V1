<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/logoredondo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <title>Ganados GBS</title>

    <style>
        .carrusel-container {
            position: relative;
            margin-top: 7%;
            margin-left: auto;
            margin-right: auto;
            width: 600px;
            /* Ajusta el ancho según tus necesidades */
        }

        .carrusel img {
            width: 100%;
            height: auto;
        }
    </style>

    <style>
        /* Estilos CSS para la sección de noticias */
        .noticia h1 {
            font-size: 55px;
            color: white;
            text-align: center;
            text-decoration: underline 2px;
            text-decoration-color: black;
            text-underline-offset: 20px;
            margin-top: 10%;
        }

        .fondo-noti {
            background-color: rgba(52, 78, 54, 1);
            padding: 10px;
            margin: 2%;
            overflow-x: auto;
            white-space: nowrap;
            display: flex;
        }

        .noti {
            background-color: rgba(85, 109, 74, 1);
            padding: 10px;
            height: 450px;
            width: 420px;
            text-align: center;
            color: white;
            text-decoration: underline 2px;
            text-decoration-color: black;
            text-underline-offset: 10px;
            margin-right: 10px;
        }
    </style>

    <style>
        /* Estilos CSS para la sección de razas */
        .razas h1 {
            font-size: 55px;
            color: white;
            text-align: center;
            text-decoration: underline 2px;
            text-decoration-color: black;
            text-underline-offset: 20px;
            margin-top: 10%;
        }

        .fondo-razas {
            background-color: rgba(52, 78, 54, 1);
            padding: 10px;
            margin: 2%;
            overflow-x: auto;
            white-space: nowrap;
            display: flex;
        }

        .raza {
            background-color: rgba(85, 109, 74, 1);
            padding: 10px;
            height: 450px;
            width: 420px;
            text-align: center;
            color: white;
            text-decoration: underline 2px;
            text-decoration-color: black;
            text-underline-offset: 10px;
            margin-right: 10px;
        }
    </style>

    <style>
        /* Estilos CSS para la sección de comisionistas */
        .comisionista h1 {
            font-size: 55px;
            color: white;
            text-align: center;
            text-decoration: underline 2px;
            text-decoration-color: black;
            text-underline-offset: 20px;
            margin-top: 10%;
        }

        .fondo-com {
            background-color: rgba(52, 78, 54, 1);
            padding: 10px;
            margin: 2%;
            overflow-x: auto;
            white-space: nowrap;
            display: flex;
        }

        .comi {
            background-color: rgba(85, 109, 74, 1);
            padding: 10px;
            height: 450px;
            width: 420px;
            text-align: center;
            color: white;
            text-decoration: underline 2px;
            text-decoration-color: black;
            text-underline-offset: 10px;
        }
    </style>

</head>




<body>

    <header class="header">
        <div>
            <img src="img/logoredondo.png" alt="Logo" width="60px">
        </div>

        <div class="bottom">
            <a href="singup.php">Iniciar Sesión</a>
        </div>

        <div id="stickyNavs" class="sticky-navs">
            <div class="navs">
                <a href="#noticias"><img src="img/noticias.png" alt="noticias" width="120px"> Noticias</a>
                <a href="#razas"><img src="img/razas.png" alt="razas" width="120px"> Razas</a>
                <a href="#comisionistas"><img src="img/comisionista.png" alt="comisionistas" width="120px"> Agentes</a>
            </div>
        </div>
    </header>

    <main>
        <section id="inicio">
            <div class="gnrl">
                <div class="logo">
                    <div class="img2">
                        <img src="img/logoredondo.png" alt="logo" width="182px">
                    </div>

                    <div>
                        <h2>GANADOS GBS</h2>
                    </div>

                    <div class="navs">
                        <a href="#noticias"><img src="img/noticias.png" alt="noticias" width="120px"> Noticias</a>
                        <a href="#razas"><img src="img/razas.png" alt="razas" width="120px"> Razas</a>
                        <a href="#comisionistas"><img src="img/comisionista.png" alt="articulos" width="120px">
                            Agentes</a>
                    </div>
                </div>

                <div class="carrusel-container">
                    <div class="carrusel">
                        <div><img src="img/laschilcas1.jpg" alt="Imagen 1"></div>
                        <div><img src="img/laschilcas2.jpg" alt="Imagen 2"></div>

                        <div><img src="img/laschilcas4.jpg" alt="Imagen 4"></div>
                        <!-- Agrega más imágenes según sea necesario -->
                    </div>
                </div>

            </div>


        </section>

        <section id="noticias">
            <div class="noticia">
                <h1>
                    NOTICIAS
                </h1>
            </div>

            <?php
            // Configuración de la conexión a la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_ganados";

            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Consulta SQL para obtener las noticias
            $sql = "SELECT * FROM tb_noticias";
            $result = $conn->query($sql);

            // Verificar si hay noticias
            if ($result->num_rows > 0) {
                // Imprimir las noticias en HTML
                echo '<div class="fondo-noti">';
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="noti">';
                    echo '<a href="detalle_noticia.php">';
                    echo '<img src="' . $row['imagen'] . '" alt="Noticia" width="380px" height="360px">';
                    echo '<h1>' . $row['titulo'] . '</h1>';
                    echo '</a>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p>No hay noticias disponibles.</p>';
            }

            // Cerrar la conexión
            $conn->close();
            ?>

        </section>

        <section id="razas">
            <div class="razas">
                <h1>
                    RAZAS
                </h1>
            </div>

            <?php
            // Configuración de la conexión a la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_ganados";

            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Consulta SQL para obtener las razas
            $sql = "SELECT * FROM tb_razas";
            $result = $conn->query($sql);

            // Verificar si hay razas
            if ($result->num_rows > 0) {
                // Imprimir las razas en HTML
                echo '<div class="fondo-razas">';
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="raza">';
                    echo '<a href="raza.html">';
                    echo '<img src="' . $row['image'] . '" alt="Raza" width="380px" height="360px">';
                    echo '<h1>' . $row['name'] . '</h1>';
                    echo '</a>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p>No hay razas disponibles.</p>';
            }

            // Cerrar la conexión
            $conn->close();
            ?>
        </section>



        <section id="comisionistas">
            <div class="comisionista">
                <h1>
                    COMISIONISTAS
                </h1>
            </div>

            <?php
            // Configuración de la conexión a la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_ganados";

            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Consulta SQL para obtener los comisionistas
            $sql = "SELECT * FROM tb_comisionistas";
            $result = $conn->query($sql);

            // Verificar si hay comisionistas
            if ($result->num_rows > 0) {
                // Imprimir los comisionistas en HTML
                echo '<div class="fondo-com">';
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="comi">';
                    echo '<img src="' . $row['image'] . '" alt="Comisionista" width="380px" height="360px">';
                    echo '<h1>' . $row['name'] . '</h1>';
                    echo '<p>' . $row['text'] . '</p>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p>No hay comisionistas disponibles.</p>';
            }

            // Cerrar la conexión
            $conn->close();
            ?>

        </section>
    </main>


</body>

<!-- Agrega el enlace CDN de jQuery (requerido por Slick Carousel) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Agrega el script de Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- Inicializa el carrusel -->
<script>
    $(document).ready(function () {
        $('.carrusel').slick({
            autoplay: true,
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    });
</script>
</body>

<script src="script.js"></script>



</html>