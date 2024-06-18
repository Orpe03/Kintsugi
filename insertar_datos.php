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

// Verificar si se recibieron los datos POST esperados
if (isset($_POST['nombre']) && isset($_POST['logros']) && isset($_POST['parte_1']) && isset($_POST['parte_2'])) {
    $nombre = $_POST['nombre'];
    $logros = $_POST['logros'];
    $parte_1 = $_POST['parte_1'];
    $parte_2 = $_POST['parte_2'];

    // Preparar la consulta SQL para insertar los datos en la tabla 'datos_jugador'
    $sql = "INSERT INTO datos_jugador (nombre, logros, parte_1, parte_2) VALUES ('$nombre', '$logros', '$parte_1', '$parte_2')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente en la base de datos";
    } else {
        echo "Error al insertar datos: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Datos no recibidos correctamente";
}

$conn->close();
?>






