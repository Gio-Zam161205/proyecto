<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    $is_logged_in = false;  
} else {
    $is_logged_in = true; 
    $user_name = $_SESSION['user_name']; 
$nombre = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';  }
?>
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
  <br><br><br>
  </div>
  <div class="container text-center my-4">
    <p class="lead">En TechGadgetsHub, ofrecemos una amplia gama de productos tecnológicos de alta calidad para
      profesionales y entusiastas, garantizando innovación y rendimiento en cada compra.</p>
  </div>
  <br><br><br>
  <h1 class="text-center mt-5">Conoce nuestros productos</h1>
  <br><br><br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/amd.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/intel1.avif" style="height: 600px; width: 600px;" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/nvidia2.webp" style="height: 600px; width: 600px;" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <h2>
    <p class="text-center mt-2">Hardware y Componentes
    </p>
  </h2>
  <br>
  <br>
  <div class="container d-flex justify-content-between" style="max-width: 100%;">
    <div id="carouselTeclados" class="carousel slide" style="width: 48%;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/teclado.jpg" class="d-block w-100" alt="Teclados" style="height: 500px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Teclados</h5>
            <p>Una gran variedad de teclados para todo tipo de usuario.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/mouse.jpg" class="d-block w-100" alt="Mouse" style="height: 500px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Mouse</h5>
            <p>Elige el mouse perfecto para tu trabajo o entretenimiento.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/monitor.jpg" class="d-block w-100" alt="Monitores" style="height: 500px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Monitores</h5>
            <p>Monitores de alta definición para todo tipo de tareas.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/mousepad.jpeg" class="d-block w-100" alt="MousePad" style="height: 500px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>MousePad</h5>
            <p>Accesorios ideales para complementar tu experiencia.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/camara.jpeg" class="d-block w-100" alt="Cámaras" style="height: 500px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Cámaras</h5>
            <p>Encuentra cámaras de alta calidad para todo tipo de situaciones.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselTeclados" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselTeclados" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div id="carouselComponentes" class="carousel slide" style="width: 48%;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselComponentes" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselComponentes" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselComponentes" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselComponentes" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselComponentes" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselComponentes" data-bs-slide-to="5" aria-label="Slide 6"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/procesador.webp" class="d-block w-100" alt="Procesadores" style="height: 500px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Procesadores</h5>
            <p>Componentes clave para el rendimiento de tu computadora.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/tarjetadevideo.webp" class="d-block w-100" alt="Tarjeta de Video" style="height: 500px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Tarjeta de Video</h5>
            <p>La mejor opción para potenciar el rendimiento gráfico.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/memoria.webp" class="d-block w-100" alt="Memoria RAM" style="height: 500px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Memoria RAM</h5>
            <p>Memoria rápida para un rendimiento eficiente.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/tarjetamadre.png" class="d-block w-100" alt="Tarjeta Madre" style="height: 500px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Tarjeta Madre</h5>
            <p>La base de tu computadora, asegurando la compatibilidad.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/gabinete.jpeg" class="d-block w-100" alt="Gabinete" style="height: 500px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Gabinete</h5>
            <p>El lugar donde todo tu hardware se conecta.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/fuente.jpeg" class="d-block w-100" alt="Fuente de Poder" style="height: 500px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Fuente de Poder</h5>
            <p>Proporciona la energía necesaria para tu computadora.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselComponentes" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselComponentes" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>