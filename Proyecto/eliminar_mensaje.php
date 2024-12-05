<?php
include 'acceso.php';

// Verificar si se recibe un ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Preparar la consulta de eliminación
    $delete_query = "DELETE FROM contactos WHERE id = ?";
    
    // Preparar la sentencia
    if ($stmt = $conn->prepare($delete_query)) {
        $stmt->bind_param("i", $id); // "i" para un parámetro entero
        $stmt->execute();
        
        // Redirigir de vuelta al panel de administración
        header("Location: tablero.php");
    } else {
        echo "Error al eliminar el mensaje.";
    }
}
?>
