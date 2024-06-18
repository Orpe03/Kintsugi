<?php
// Conexión a la base de datos (ajusta los datos según tu configuración)
$servername = "localhost"; // Cambia esto si usas un servidor remoto diferente
$username = "root"; // Cambia el usuario si es diferente
$password = ""; // Cambia la contraseña si es diferente
$dbname = "kintsugi"; // Cambia el nombre de la base de datos si es diferente

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





