<?php
// Conexión a la base de datos (ajusta los datos según tu configuración)
$servername = "localhost";
$username = "root";
$password = ""; // Reemplaza con la contraseña correcta
$dbname = "kintsugi";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el nombre enviado desde Unity
$nombre = $_POST['nombre'];

// Preparar la consulta SQL para insertar el nombre en la tabla
$sql = "INSERT INTO usuarios (nombre) VALUES ('$nombre')";

if ($conn->query($sql) === TRUE) {
    echo "Nombre insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



