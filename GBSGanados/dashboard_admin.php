<?php
session_start();

// Verifica si el usuario tiene una sesión válida y permisos de administrador
if (!tieneSesionAdmin()) {
    header('Location: index.php');  // Redirige si no hay sesión o no es un administrador
    exit();
}

function tieneSesionAdmin() {
    return isset($_SESSION['usuario']);
}



// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    // Muestra el nombre de usuario y el botón de cerrar sesión
    echo '<p>Bienvenido, ' . $_SESSION['usuario'] . '!</p>';
    echo '<form action="cerrar_sesion.php" method="post">';
    echo '<input type="submit" value="Cerrar Sesión">';
    echo '</form>';
} else {
    // Muestra un mensaje o redirige a la página de inicio de sesión si no hay sesión iniciada
    echo '<p>Inicia sesión para ver este contenido.</p>';
    // Puedes redirigir a la página de inicio de sesión si lo prefieres:
    // header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Encabezado del Dashboard del Administrador -->
</head>

<body>
    <h1>Bienvenido al Dashboard del Administrador, <?php echo $_SESSION['usuario']; ?>!</h1>
    <!-- Contenido del Dashboard -->

    <a href="cargarNotice.php">Cargar Noticia</a> <br>

    <a href="registrarraza.php">Cargar Raza</a> <br>

    <a href="registrarcomisionista.php">Cargar Agente</a> <br>


</body>

</html>
