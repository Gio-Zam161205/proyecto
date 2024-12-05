<?php
session_start();
$is_logged_in = isset($_SESSION['user_id']);
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
                        <li><hr class="dropdown-divider"></li>
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

            <?php if (!$is_logged_in): ?>
                <ul class="navbar-nav ml-auto" style="margin-left: 15px;">
                    <li class="nav-item">
                        <a class="nav-link" href="iniciar.php" style="background-color: white; color: #003366; padding: 10px 20px; border-radius: 5px; font-weight: bold;">Iniciar</a>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="navbar-nav ml-auto" style="margin-left: 15px;">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="background-color: white; color: #003366; padding: 10px 20px; border-radius: 5px; font-weight: bold;">Salir</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
  </nav>

    <div class="container-fluid " style="background-color: #0f0f12f7; height: 300px; width: 100%;" >
        <center>
            <img src="images/logo.png" alt="Descripción de la imagen" style="height: 300px; width: 300px ;">
        </center>
    </div>

    <div class="container my-5">
        <h1 class="text-center mb-4">Contáctanos</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="guardar_contacto.php" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Tu correo electrónico" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Tu mensaje" required></textarea>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="acepto" required>
                        <label class="form-check-label" for="acepto">Acepto los términos y condiciones</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Enviar mensaje</button>
                </form>
            </div>
        </div>

        <div class="contact-info text-center mt-5">
            <p><strong>Dirección:</strong> Calle Ficticia 123, Ciudad Imaginaria, Estado Ficticio</p>
            <p><strong>Email:</strong> <a href="mailto:emmanuelvazquezluna@gmail.com">emmanuelvazquezluna@gmail.com</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
