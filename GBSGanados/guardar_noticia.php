<?php

class Noticia {
    // Propiedades
    public $cod;
    public $titulo;
    public $imagen;
    public $descripcion;

    // Constructor
    public function __construct($cod, $titulo, $imagen, $descripcion) {
        $this->cod = $cod;
        $this->titulo = $titulo;
        $this->imagen = $imagen;
        $this->descripcion = $descripcion;
    }

    // Métodos
    public function obtenerTitulo() {
        return $this->titulo;
    }

    public function obtenerImagen() {
        return $this->imagen;
    }

    public function obtenerDescripcion() {
        return $this->descripcion;
    }

    public function imprimirNoticia() {
        echo "Código: " . $this->cod . "<br>";
        echo "Título: " . $this->titulo . "<br>";
        echo "Imagen: " . $this->imagen . "<br>";
        echo "Descripción: " . $this->descripcion . "<br>";
    }

    // Método para guardar la noticia en la base de datos
    public function guardarEnBaseDeDatos() {
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

        // Obtener datos de la noticia
        $titulo = $this->titulo;
        $imagen = $this->imagen;
        $descripcion = $this->descripcion;

        // Insertar datos en la base de datos
        $sql = "INSERT INTO tb_noticias (titulo, imagen, descripcion) VALUES ('$titulo', '$imagen', '$descripcion')";

        if ($conn->query($sql) === TRUE) {
            echo "Noticia guardada correctamente";
        } else {
            echo "Error al guardar la noticia: " . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
    }
}
?>
