<?php
include_once '../db_connection.php';
header('Content-Type: application/json; charset=utf-8');

$connection = new Connect();

try {
    // Consulta SQL
    $query = "SELECT name FROM referrals WHERE status = true";

    // Ejecutar la consulta
    $result = $connection->get_query($query);
    $result->execute();

    // Obtener los resultados
    $data = $result->fetchAll(PDO::FETCH_ASSOC);

    // Verificar la cantidad de filas devueltas
    if (count($data) === 0) {
        echo json_encode(['message' => 'No hay resultados.']);
    } else {
        // Devolver los resultados en formato JSON
        echo json_encode($data);
    }
} catch (PDOException $e) {
    // Manejar excepciones de la base de datos
    echo json_encode(['error' => 'Error de la base de datos: ' . $e->getMessage()]);
}

// Cerrar la conexión
$connection = null;
?>
