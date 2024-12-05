<?php
session_start(); 
include 'acceso.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conexion->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $sql = "SELECT id, nombre, email, contraseña, rol FROM usuarios WHERE email = '$email'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        if (password_verify($password, $row['contraseña'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['nombre'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_role'] = $row['rol']; // Espacio corregido aquí
            // Abre el index según su rol (admin o cliente)
            if ($_SESSION['user_role'] === 'admin') {
                header("Location: tablero.php");
            } else {
                header("Location: index.php");
            }
            exit();
        } else {
            $error_message = "Contraseña incorrecta.";
        }
    } else {
        $error_message = "Usuario no encontrado.";
    }

    $conexion->close();
}
?>


<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iniciar Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1e3a5fed; color: white;">
  <div class="container-fluid">
    <img src="images/logo.png" alt="Descripción de la imagen" class="imagen-principal" style="width: 3%; height: 3%;">
    <a class="navbar-brand" href="#">TechGadgetsHub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="quienesomos.php">¿Quiénes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contacto.php">Contáctanos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>

<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="card p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">Iniciar Sesión</h3>
        <form method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
        </form>

        <?php
        if (isset($error_message)) {
            echo "<div class='alert alert-danger mt-3'>$error_message</div>";
        }
        ?>
        
        <div class="text-center mt-3">
            <p>¿No tienes cuenta? <a href="registrarse.php">Crear cuenta</a></p>
        </div>
    </div>
</div>

<script src="register.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
