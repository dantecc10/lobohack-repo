<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$dbname = 'lobohack';
$username = 'lobohacker';
$password = 'SQLTester23!!';

// Devolver los datos en formato JSON
header('Content-Type: application/json');
http_response_code(200);
$query = "SELECT * FROM users";
$db = new mysqli($host, $username, $password, $dbname);
$result = $db->query($query);
$users = array();
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

echo json_encode($users);
