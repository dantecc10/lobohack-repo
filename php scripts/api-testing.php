<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$dbname = 'lobohack';
$username = 'lobohacker';
$password = 'SQLTester23!!';

// Devolver los datos en formato JSON
header('Content-Type: application/json');
echo json_encode($users);
$query = "SELECT * FROM users";
$result = $db->query($query);
$users = array();
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

echo json_encode($users);