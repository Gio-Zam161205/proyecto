<?php
include 'acceso.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $correo = $conexion->real_escape_string($_POST['correo']);
    $mensaje = $conexion->real_escape_string($_POST['mensaje']);

    $sql = "INSERT INTO contactos (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

    if ($conexion->query($sql) === TRUE) {
        echo "Mensaje enviado correctamente";
    } else {
        echo "Error al enviar el mensaje: " . $conexion->error;
    }

    $conexion->close();
} else {
    echo "No se enviaron datos.";
}
?>
