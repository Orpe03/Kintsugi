<?php
// Conexión a la base de datos (ajusta los datos según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kintsugi";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si 'nombre' está en el POST
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];

    // Preparar la consulta SQL para insertar el nombre en la tabla 'usuarios'
    $sql = "INSERT INTO usuarios (nombre) VALUES ('$nombre')";

    if ($conn->query($sql) === TRUE) {
        echo "Nombre insertado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Nombre no proporcionado";
}

$conn->close();
?>








