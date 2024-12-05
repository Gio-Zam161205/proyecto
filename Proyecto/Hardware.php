<?php
session_start(); 
$is_logged_in = isset($_SESSION['user_id']);  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Hardware</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        .product-header {
            background: url('images/hardware_header.jpg') center/cover no-repeat;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 1px 1px 8px rgba(0, 0, 0, 0.7);
        }
        .specs, .reviews {
            background-color: #f8f9fa;
            padding: 2rem 0;
        }
        .specs-title, .gallery-title, .review-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #343a40;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
            margin-bottom: 1rem;
        }
        .gallery-img {
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
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
                        <li><a class="dropdown-item" href="Laptop.php">Laptops</a></li>
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
            <h1 class="display-4">Componente de Hardware</h1>
            <p class="lead">Potencia y rendimiento para llevar tu sistema al siguiente nivel</p>
            <a href="#specs" class="btn btn-primary mt-3">Ver Especificaciones</a>
        </div>
    </header>
    <section class="container py-5">
        <h2>Sobre el Producto</h2>
        <p>Este componente de hardware ha sido diseñado con tecnología de punta para optimizar el rendimiento de tu equipo. Ideal para gaming, edición de video o para estaciones de trabajo intensivas, ofrece una experiencia fluida y estable en cada uso.</p>
    </section>

    <section id="specs" class="specs">
        <div class="container">
            <h3 class="specs-title">Especificaciones Técnicas</h3>
            <div class="row">
                <div class="col-md-4">
                    <h4>Procesador</h4>
                    <p>Modelo XYZ con frecuencia base de 3.8 GHz y turbo hasta 5.1 GHz</p>
                </div>
                <div class="col-md-4">
                    <h4>Memoria</h4>
                    <p>16 GB GDDR6 para un rendimiento gráfico superior</p>
                </div>
                <div class="col-md-4">
                    <h4>Consumo Energético</h4>
                    <p>300W (recomendado usar una fuente de 650W o superior)</p>
                </div>
                <div class="col-md-4">
                    <h4>Compatibilidad</h4>
                    <p>Compatible con PCIe 4.0, DirectX 12, y Vulkan</p>
                </div>
                <div class="col-md-4">
                    <h4>Conectores</h4>
                    <p>2x HDMI 2.1, 3x DisplayPort 1.4a</p>
                </div>
                <div class="col-md-4">
                    <h4>Resolución Máxima</h4>
                    <p>8K (7680 x 4320)</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <h3 class="gallery-title">Galería</h3>
        <div class="row g-3">
            <div class="col-md-4">
                <img src="images/hardware_front.jpeg" alt="Vista Frontal" class="img-fluid gallery-img">
            </div>
            <div class="col-md-4">
                <img src="images/hardware_side.jpeg" alt="Vista Lateral" class="img-fluid gallery-img">
            </div>
            <div class="col-md-4">
                <img src="images/hardware_ports.jpeg" alt="Conectores" class="img-fluid gallery-img">
            </div>
        </div>
    </section>

    <section class="container py-5">
      <h3 class="text-center">Comparación de Procesadores</h3>
      <p class="text-center">Intel Core i9 vs AMD Ryzen 9</p>
      <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
              <div class="card border-primary">
                  <div class="card-header bg-primary text-white text-center">
                      <h4>Intel Core i9-13900K</h4>
                  </div>
                  <div class="card-body">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item"><strong>Núcleos/Hilos:</strong> 24/32</li>
                          <li class="list-group-item"><strong>Frecuencia Base:</strong> 3.0 GHz</li>
                          <li class="list-group-item"><strong>Frecuencia Turbo:</strong> 5.8 GHz</li>
                          <li class="list-group-item"><strong>Consumo Energético:</strong> 125W</li>
                          <li class="list-group-item"><strong>Proceso de Fabricación:</strong> Intel 7</li>
                          <li class="list-group-item"><strong>Socket:</strong> LGA 1700</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card border-danger">
                  <div class="card-header bg-danger text-white text-center">
                      <h4>AMD Ryzen 9 7950X</h4>
                  </div>
                  <div class="card-body">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item"><strong>Núcleos/Hilos:</strong> 16/32</li>
                          <li class="list-group-item"><strong>Frecuencia Base:</strong> 4.5 GHz</li>
                          <li class="list-group-item"><strong>Frecuencia Turbo:</strong> 5.7 GHz</li>
                          <li class="list-group-item"><strong>Consumo Energético:</strong> 170W</li>
                          <li class="list-group-item"><strong>Proceso de Fabricación:</strong> 5 nm</li>
                          <li class="list-group-item"><strong>Socket:</strong> AM5</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </section>
    <section class="container py-5 reviews">
        <h3 class="review-title">Opiniones de Usuarios</h3>
        <blockquote class="blockquote">
            <p>"Es un componente excepcional para tareas de alto rendimiento. La diferencia se nota de inmediato."</p>
            <footer class="blockquote-footer">Carlos López</footer>
        </blockquote>
        <blockquote class="blockquote">
            <p>"Lo compré para mi PC de gaming y me ha dado excelentes resultados. Cero problemas de temperatura."</p>
            <footer class="blockquote-footer">María González</footer>
        </blockquote>
    </section>
    <footer class="text-center py-4 bg-light">
        <p>&copy; 2024 Tienda de Tecnología - Todos los derechos reservados.</p>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
