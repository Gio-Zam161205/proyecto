<?php
include 'acceso.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $email = $conn->real_escape_string($_POST['email']);
    $rol = $conn->real_escape_string($_POST['rol']);

    $update_query = "UPDATE usuarios SET nombre = '$nombre', email = '$email', rol = '$rol' WHERE id = '$id'";

    if ($conn->query($update_query) === TRUE) {
        echo "Usuario actualizado correctamente";
    } else {
        echo "Error al actualizar el usuario: " . $conn->error;
    }
}
?>
