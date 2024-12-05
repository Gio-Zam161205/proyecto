<?php
session_start();
require_once 'acceso.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nos evitamos el pedo de  inyecciones SQL
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    // Consulta usuario, contraseña y rol
    $sql = "SELECT id, username, password, rol FROM usuarios WHERE username = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        error_log("Error en la preparación de la consulta: " . $conn->error);
        die("Error interno.");
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verifica qué datos se obtuvieron de la base de datos
        error_log("Datos obtenidos de la base de datos: " . print_r($user, true));

        //validacion de contraseña encriptada
        if (password_verify($password, $user['password'])) {
            // config de inicio
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['username'];
            $_SESSION['user_role'] = $user['rol'];

            // checa que rol le toco 
            error_log("Rol del usuario: " . $user['rol']);

            // index correspondiente al rol
            if ($user['rol'] === 'admin') {
                header('Location: tablero.php');
                exit();
            } else if ($user['rol'] === 'cliente') {
                header('Location: index.php');
                exit();
            } else {
                echo "Rol no reconocido.";
            }
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    $stmt->close();
    $conn->close();
}
?>
