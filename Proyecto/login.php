<?php
session_start();
include 'acceso.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $conexion->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Consulta los huercos
    $sql = "SELECT id, nombre, email, contraseña, rol FROM usuarios WHERE email = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        // Verificar contraseña
        if (password_verify($password, $usuario['contraseña'])) {
            // Inicia y guarda datos
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_name'] = $usuario['nombre'];
            $_SESSION['user_email'] = $usuario['email'];
            $_SESSION['user_role'] = $usuario['rol'];

            // Depuración
            error_log("Inicio de sesión exitoso. Rol: " . $_SESSION['user_role']);
            exit();
        } else {
            echo json_encode(['success' => false, 'message' => 'Contraseña incorrecta']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Correo electrónico no registrado']);
    }

    $stmt->close();
    $conexion->close();
}
?>
