<?php

// Configuración de la conexión a la base de datos
$host = 'localhost';
$dbname = 'lobohack';
$username = 'lobohacker';
$password = 'SQLTester23!!';

try {
    // Conexión a la base de datos utilizando PDO
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL para obtener datos de la base de datos
    $query = "SELECT * FROM users";
    $statement = $db->query($query);
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Devolver los datos en formato JSON
    header('Content-Type: application/json');
    echo json_encode($users);
} catch (PDOException $e) {
    // Manejo de errores
    echo "Error: " . $e->getMessage();
}
