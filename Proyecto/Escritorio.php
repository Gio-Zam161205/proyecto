<?php
session_start();
$is_logged_in = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos - Escritorio</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  
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

  <style>
    .product-header {
      background: url('images/desk_header.jpg') center/cover no-repeat;
      height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 1px 1px 8px rgba(0, 0, 0, 0.7);
    }

    .features {
      background-color: #f5f5f5;
      padding: 2rem 0;
    }

    .features-title {
      font-size: 1.5rem;
      font-weight: bold;
      color: #333;
      border-bottom: 2px solid #28a745;
      padding-bottom: 5px;
      margin-bottom: 1rem;
    }

    .gallery-img {
      height: 200px;
      object-fit: cover;
      border-radius: 5px;
    }

    .navbar-dark {
      background-color: #1e3a5f;
    }

    .carousel-caption h5 {
      font-size: 1.5rem;
    }

    .footer {
      font-size: 0.9rem;
    }

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
  <header class="product-header text-center">
    <div>
      <h1 class="display-4">Escritorio Moderno</h1>
      <p class="lead">Elegancia y funcionalidad para tu espacio de trabajo</p>
      <a href="#features" class="btn btn-success mt-3">Ver Características</a>
    </div>
  </header>

  <section class="container py-5">
    <h2>Sobre el Producto</h2>
    <p>Este escritorio moderno ha sido diseñado para quienes buscan un espacio de trabajo funcional y estético. Con acabados de alta calidad y materiales resistentes, es ideal para oficinas y estudios, integrando organización y estilo en cada rincón.</p>
  </section>

  <section id="features" class="features">
    <div class="container">
      <h3 class="features-title">Características</h3>
      <div class="row">
        <div class="col-md-4">
          <h4>Material</h4>
          <p>Madera de roble natural con recubrimiento resistente</p>
        </div>
        <div class="col-md-4">
          <h4>Espacio de Almacenamiento</h4>
          <p>Cajones amplios y compartimentos laterales</p>
        </div>
        <div class="col-md-4">
          <h4>Dimensiones</h4>
          <p>140 cm x 75 cm x 60 cm</p>
        </div>
        <div class="col-md-4">
          <h4>Estilo</h4>
          <p>Minimalista y moderno</p>
        </div>
        <div class="col-md-4">
          <h4>Colores Disponibles</h4>
          <p>Blanco, negro y madera natural</p>
        </div>
        <div class="col-md-4">
          <h4>Fácil Ensamblaje</h4>
          <p>Incluye instrucciones detalladas y herramientas necesarias</p>
        </div>
      </div>
    </div>
  </section>

  <section class="container py-5">
    <h3>Galería</h3>
    <div class="row g-3">
      <div class="col-md-4">
        <img src="images/desk_front.jpg" alt="Vista Frontal" class="img-fluid gallery-img">
      </div>
      <div class="col-md-4">
        <img src="images/desk_side.jpg" alt="Vista Lateral" class="img-fluid gallery-img">
      </div>
      <div class="col-md-4">
        <img src="images/desk_drawers.jpg" alt="Cajones" class="img-fluid gallery-img">
      </div>
    </div>
  </section>

  <section class="container py-5">
    <h3>Opiniones de Usuarios</h3>
    <blockquote class="blockquote">
      <p>"Un escritorio robusto y hermoso, ideal para organizar mi espacio de trabajo y mantenerlo siempre en orden."</p>
      <footer class="blockquote-footer">Ana Martínez</footer>
    </blockquote>
    <blockquote class="blockquote">
      <p>"La combinación de diseño y funcionalidad es perfecta. Además, el montaje fue muy sencillo."</p>
      <footer class="blockquote-footer">Juan Pérez</footer>
    </blockquote>
  </section>

  <footer class="text-center py-4 bg-light footer">
    <p>&copy; 2024 TechGadgetsHub - Todos los derechos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
