<?php
include_once '../db_connection.php';
// header('Content-Type: application/json; charset=utf-8');

$connection = new Connect();

try {
    // Consulta SQL
    $query = "INSERT INTO referrals (name) VALUES ('Luis Fernando Cortés Guerrero')";

    // Ejecutar la consulta
    $result = $connection->get_query($query);
    $result->execute();

    return $stmt->rowCount();
} catch (PDOException $e) {
    // Manejar excepciones de la base de datos
    echo json_encode(['error' => 'Error de la base de datos: ' . $e->getMessage()]);
}

// Cerrar la conexión
$connection = null;
?>
