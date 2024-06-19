<?php
header('Content-Type: application/json');

// Conexión a la base de datos
$host = 'localhost';
$dbname = 'kintsugi';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query('SELECT nombre, logros, parte_1, parte_2 FROM usuarios');
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($usuarios);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>

