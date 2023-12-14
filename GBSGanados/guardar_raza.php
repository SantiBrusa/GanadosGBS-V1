<?php

class Raza {
    // Propiedades
    public $cod;
    public $name;
    public $image;
    public $text;

    // Constructor
    public function __construct($cod, $name, $image, $text) {
        $this->cod = $cod;
        $this->name = $name;
        $this->image = $image;
        $this->text = $text;
    }

    // Métodos
    public function obtenerNombre() {
        return $this->name;
    }

    public function obtenerImagen() {
        return $this->image;
    }

    public function obtenerTexto() {
        return $this->text;
    }

    public function imprimirRaza() {
        echo "Código: " . $this->cod . "<br>";
        echo "Nombre: " . $this->name . "<br>";
        echo "Imagen: " . $this->image . "<br>";
        echo "Texto: " . $this->text . "<br>";
    }

    // Método para guardar la raza en la base de datos
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

        // Obtener datos de la raza
        $name = $this->name;
        $image = $this->image;
        $text = $this->text;

        // Insertar datos en la base de datos
        $sql = "INSERT INTO tb_razas (name, image, text) VALUES ('$name', '$image', '$text')";

        if ($conn->query($sql) === TRUE) {
            echo "Raza guardada correctamente";
        } else {
            echo "Error al guardar la raza: " . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
    }
}
?>
