<?php
header("Content-Type: application/json");
include 'acceso.php';  //conexion a la BD

// datos del cliente
$data = json_decode(file_get_contents("php://input"), true);
$username = $data['username'];
$email = $data['email'];
$password = password_hash($data['password'], PASSWORD_DEFAULT); //contraseñas aseguradas

//contador de usuarios
$sql_count = "SELECT COUNT(*) AS total FROM usuarios";
$resultado = $conexion->query($sql_count);

if ($resultado) {
    $row = $resultado->fetch_assoc();
    $total_usuarios = (int)$row['total'];

    // Depuracion
    error_log("Número total de usuarios en la base de datos: $total_usuarios");

    // Determinar el rol
    $role = ($total_usuarios < 3) ? 'admin' : 'cliente';

    // rol asignado
    error_log("Rol asignado al nuevo usuario: $role");
} else {
    echo json_encode(['success' => false, 'message' => 'Error al contar los usuarios.']);
    $conexion->close();
    exit;
}

// validacion de correo
$sql_check = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conexion->prepare($sql_check);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo json_encode(['success' => false, 'message' => 'El email ya está registrado.']);
    $stmt->close();
    $conexion->close();
    exit;
}

// se registra con el rol correspondiente
$sql_insert = "INSERT INTO usuarios (nombre, email, contraseña, rol) VALUES (?, ?, ?, ?)";
$stmt_insert = $conexion->prepare($sql_insert);
$stmt_insert->bind_param("ssss", $username, $email, $password, $role);

if ($stmt_insert->execute()) {
    echo json_encode(['success' => true, 'message' => 'Registro exitoso', 'role' => $role]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error al registrar el usuario.']);
}

$stmt_insert->close();
$conexion->close();
?>