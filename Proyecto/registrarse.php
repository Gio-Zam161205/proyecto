<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'acceso.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $email = $conexion->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    if ($password !== $confirmPassword) {
        echo "Las contraseñas no coinciden. Inténtalo de nuevo.";
    } else {  
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "SELECT id FROM usuarios WHERE email = '$email'";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            echo "Este correo ya está registrado. Por favor, usa otro.";
        } else {
            $sql = "INSERT INTO usuarios (nombre, email, contraseña) VALUES ('$nombre', '$email', '$passwordHash')";
            if ($conexion->query($sql) === TRUE) {
                echo "Usuario registrado exitosamente.";
            } else {
                echo "Error al registrar usuario: " . $conexion->error;
            }
        }
    }

    $conexion->close();
}
?>

  <style>
    body {
      font-size: 18px;
    }

    h1 {
      font-size: 36px;
    }

    .form-label,
    .form-control,
    .btn {
      font-size: 1.2rem;
    }

    .btn-primary {
      background-color: #003366;
      border-color: #003366;
    }

    .btn-primary:hover {
      background-color: #00264d;
      border-color: #00264d;
    }

    .contact-info {
      margin-top: 30px;
      font-size: 1.1rem;
    }
  </style>

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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Laptop.php">Laptop</a></li>
            <li><a class="dropdown-item" href="Escritorio.php">Escritorio</a></li>
            <li><a class="dropdown-item" href="Hardware.php">Hardware</a></li>
            <li><a class="dropdown-item" href="#">Tabletas</a></li>
            <li><a class="dropdown-item" href="#">Monitores</a></li>
            <li><a class="dropdown-item" href="#">Almacenamiento</a></li>
            <li><a class="dropdown-item" href="#">Accesorios</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Licencias Software</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="quienesomos.php">¿Quiénes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contacto.php">Contáctanos</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav ml-auto" style="margin-left: 15px;">
        <li class="nav-item">
          <a class="nav-link" href="estrella.php" style="background-color: white; color: #003366; padding: 10px 20px; border-radius: 5px; font-weight: bold;">Califica</a>
        </li>
      </ul>
        <ul class="navbar-nav ml-auto" style="margin-left: 15px;">
          <li class="nav-item">
            <a class="nav-link" href="iniciar.php" style="background-color: white; color: #003366; padding: 10px 20px; border-radius: 5px; font-weight: bold;">Iniciar</a>
          </li>
        </ul>
    </div>
  </div>
</nav>
<br>

    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="card p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Crear Cuenta</h3>
            <form method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Registrar</button>
            </form>
            <div class="text-center mt-3">
                <p>¿Ya tienes cuenta? <a href="iniciar.php">Iniciar sesión</a></p>
            </div>
        </div>
    </div>

    <script src="register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
