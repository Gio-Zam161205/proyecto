<?php
session_start(); 
$is_logged_in = isset($_SESSION['user_id']);  
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Laptop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --asus-blue: #0D47A1;
            --asus-dark-blue: #002171;
            --asus-purple: #4A148C;
            --asus-grey: #E0E0E0;
            --asus-dark-grey: #424242;
            --asus-black: #212121;
           
        }

        
        .product-header {
            background: url('images/laptop_header.jpg') center/cover no-repeat;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--asus-grey);
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);
        }

        .product-header h1 {
            font-size: 3rem;
            font-weight: bold;
            color: var(--asus-blue);
        }

        .product-header p {
            font-size: 1.25rem;
        }

        
        .btn-primary {
            background-color: var(--asus-purple);
            border: none;
        }

        .btn-primary:hover {
            background-color: var(--asus-dark-blue);
        }

        .product-description {
            color: var(--asus-dark-grey);
        }

        .specifications {
            background-color: var(--asus-grey);
            padding: 2rem 0;
            border-top: 4px solid var(--asus-purple);
        }

        .spec-title {
            font-size: 1.75rem;
            font-weight: bold;
            color: var(--asus-blue);
            border-bottom: 2px solid var(--asus-purple);
            padding-bottom: 5px;
            margin-bottom: 1rem;
        }

        .specifications h4 {
            color: var(--asus-dark-blue);
        }

       
        .gallery-img {
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .gallery-img:hover {
            transform: scale(1.05);
        }

        .blockquote {
            border-left: 4px solid var(--asus-purple);
            padding-left: 1rem;
            font-style: italic;
            color: var(--asus-dark-grey);
        }

        .blockquote-footer {
            color: var(--asus-dark-blue);
        }

        footer {
            background-color: var(--asus-black);
            color: var(--asus-grey);
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

  
    <header class="product-header text-center">
        <div>
            <h1 class="display-4">Laptop de Alta Gama</h1>
            <p class="lead">Potencia y portabilidad en cada tarea</p>
            <a href="#specifications" class="btn btn-primary mt-3">Ver Especificaciones</a>
        </div>
    </header>

    <section class="container py-5 product-description">
        <h2>Sobre el Producto</h2>
        <p>La nueva Laptop de Alta Gama combina un diseño elegante con un rendimiento excepcional. Perfecta para
            trabajo, entretenimiento y creatividad, esta laptop está equipada con tecnología de última generación que se
            adapta a tus necesidades más exigentes.</p>
    </section>

 
    <section id="specifications" class="specifications">
        <div class="container">
            <h3 class="spec-title">Especificaciones Técnicas</h3>
            <div class="row">
                <div class="col-md-4">
                    <h4>Procesador</h4>
                    <p>Intel Core i7 de 13va generación</p>
                </div>
                <div class="col-md-4">
                    <h4>Memoria RAM</h4>
                    <p>16GB DDR4</p>
                </div>
                <div class="col-md-4">
                    <h4>Almacenamiento</h4>
                    <p>512GB SSD</p>
                </div>
                <div class="col-md-4">
                    <h4>Tarjeta Gráfica</h4>
                    <p>NVIDIA RTX 4070</p>
                </div>
                <div class="col-md-4">
                    <h4>Pantalla</h4>
                    <p>15.6” FHD IPS</p>
                </div>
                <div class="col-md-4">
                    <h4>Batería</h4>
                    <p>Hasta 4 horas</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <h3>Galería</h3>
        <div class="row g-3">
            <div class="col-md-4">
                <img src="images/laptop_front.jpg" alt="Vista Frontal" class="img-fluid gallery-img">
            </div>
            <div class="col-md-4">
                <img src="images/laptop_side.jpg" alt="Vista Lateral" class="img-fluid gallery-img">
            </div>
            <div class="col-md-4">
                <img src="images/laptop_open.jpg" alt="Vista Abierta" class="img-fluid gallery-img">
            </div>
        </div>
    </section>

    <section class="container py-5">
        <h3>Opiniones de Usuarios</h3>
        <blockquote class="blockquote">
            <p>"Excelente rendimiento, ideal para trabajos de edición y desarrollo. La batería me ha sorprendido por su
                duración."</p>
            <footer class="blockquote-footer">María López</footer>
        </blockquote>
        <blockquote class="blockquote">
            <p>"Un diseño ligero, pero con una potencia increíble. Perfecta para mis necesidades como diseñador
                gráfico."</p>
            <footer class="blockquote-footer">Carlos Fernández</footer>
        </blockquote>
    </section>

    <footer class="text-center py-4">
        <p>&copy; 2024 TechGadgetsHub - Todos los derechos reservados.</p>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>