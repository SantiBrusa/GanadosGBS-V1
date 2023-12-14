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
        echo '<a href="noticia.html">';
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
