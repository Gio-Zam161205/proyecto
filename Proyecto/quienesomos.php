<?php
session_start(); 
$is_logged_in = isset($_SESSION['user_id']);  
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quiénes Somos - TechGadgetsHub</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
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
    <div class="container-fluid " style="background-color: #0f0f12f7; height: 300px; width: 100%;">
      <center>
        <img src="images/logo.png" alt="Descripción de la imagen" style="height: 300px; width: 300px ;">
      </center>
    </div>

    <br><br>
    <div class="container">
      <section class="hero">
        <h1>¿Quiénes somos?</h1>
        <p>En <strong>TechGadgetsHub</strong> somos un equipo apasionado por la tecnología,
          comprometido con ofrecer productos innovadores y de alta calidad para todos los
          entusiastas y profesionales del mundo digital. Nos especializamos en traer lo
          último en tecnología y componentes electrónicos, desde las herramientas más potentes
          hasta los gadgets más útiles, con la garantía de calidad y desempeño.</p>
      </section>
      <section class="offer">
        <h2>¿Qué ofrecemos?</h2>
        <p>Ofrecemos una amplia variedad de productos que incluyen laptops, escritorios, hardware,
          componentes de computadora, accesorios y licencias de software. Cada uno de nuestros
          productos es seleccionado cuidadosamente para satisfacer las necesidades de nuestros
          clientes, ya sea para el hogar, la oficina o el área profesional.</p>
      </section>
      <section class="mission">
        <h2>¿Qué buscamos?</h2>
        <p>Buscamos brindar a nuestros clientes una experiencia de compra excepcional, con productos
          de calidad, atención personalizada y asesoría técnica. Nuestra misión es proporcionar
          soluciones tecnológicas que mejoren la productividad y el disfrute de quienes confían en
          nosotros. Trabajamos para que cada compra no solo sea una transacción, sino una inversión
          en tecnología avanzada.</p>
      </section>
    </div>
  </body>

</html>