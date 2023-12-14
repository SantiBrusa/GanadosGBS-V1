<?php

class Comisionista {
    // Propiedades
    public $cod;
    public $name;
    public $image;
    public $text;
    public $gmail;

    // Constructor
    public function __construct($cod, $name, $image, $text, $gmail) {
        $this->cod = $cod;
        $this->name = $name;
        $this->image = $image;
        $this->text = $text;
        $this->gmail = $gmail;
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

    public function obtenerGmail() {
        return $this->gmail;
    }

    public function imprimirComisionista() {
        echo "Código: " . $this->cod . "<br>";
        echo "Nombre: " . $this->name . "<br>";
        echo "Imagen: " . $this->image . "<br>";
        echo "Texto: " . $this->text . "<br>";
        echo "Gmail: " . $this->gmail . "<br>";
    }

    // Método para guardar el comisionista en la base de datos
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

        // Obtener datos del comisionista
        $name = $this->name;
        $image = $this->image;
        $text = $this->text;
        $gmail = $this->gmail;

        // Insertar datos en la base de datos
        $sql = "INSERT INTO tb_comisionistas (name, image, text, gmail) VALUES ('$name', '$image', '$text', '$gmail')";

        if ($conn->query($sql) === TRUE) {
            echo "Comisionista guardado correctamente";
        } else {
            echo "Error al guardar el comisionista: " . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
    }
}
?>
