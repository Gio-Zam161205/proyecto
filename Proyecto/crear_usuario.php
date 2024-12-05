<?php
include 'acceso.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $email = $conn->real_escape_string($_POST['email']);
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT); // Asegúrate de usar un hash para las contraseñas
    $rol = $conn->real_escape_string($_POST['rol']);

    $sql = "INSERT INTO usuarios (nombre, email, contraseña, rol) VALUES ('$nombre', '$email', '$contraseña', '$rol')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuario creado correctamente";
    } else {
        echo "Error al crear usuario: " . $conn->error;
    }
}
?>
<h2>Crear Nuevo Usuario</h2>
<form action="crear_usuario.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>
    <label for="contraseña">Contraseña:</label>
    <input type="password" name="contraseña" required><br>
    <label for="rol">Rol:</label>
    <select name="rol">
        <option value="cliente">Cliente</option>
        <option value="admin">Administrador</option>
    </select><br>
    <button type="submit">Crear Usuario</button>
</form>
