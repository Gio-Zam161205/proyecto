<?php
include 'acceso.php';  // Asegúrate de que este archivo tiene la conexión a la base de datos.

header('Content-Type: application/json');

// Verifica que el método sea POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["message" => "Método no permitido"]);
    exit();
}

// Recibe los datos enviados en formato JSON
$data = json_decode(file_get_contents('php://input'), true);

// Verifica que la calificación esté presente y sea válida
if (isset($data['rating']) && is_numeric($data['rating']) && $data['rating'] >= 1 && $data['rating'] <= 5) {
    
    // Asegúrate de que el usuario esté logueado y tenga un ID válido
    session_start();
    if (!isset($_SESSION['user_id'])) {
        echo json_encode(["message" => "Usuario no autenticado."]);
        exit();
    }

    $usuario_id = $_SESSION['user_id'];  // Se asume que el ID de usuario está en la sesión.

    $rating = $data['rating'];  // Obtiene la calificación enviada

    // Inserta la calificación en la base de datos
    $sql = "INSERT INTO Calificacion (usuario_id, rating) VALUES ('$usuario_id', '$rating')";

    if ($conexion->query($sql) === TRUE) {
        echo json_encode(['message' => 'Gracias por tu calificación!']);
    } else {
        echo json_encode(['message' => 'Error al guardar la calificación.', 'error' => $conexion->error]);
    }

} else {
    echo json_encode(['message' => 'Calificación inválida.']);
}

// Cierra la conexión
$conexion->close();
?>