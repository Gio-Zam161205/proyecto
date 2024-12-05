<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rating - Campus Camp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    .star {
      font-size: 2rem;
      color: gray;
      cursor: pointer;
    }

    .star.selected {
      color: gold;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1e3a5fed; color: white;">
    <div class="container-fluid">
      <img src="images/logo.png" alt="Descripción de la imagen" class="imagen-principal" style="width: 3%; height: 3%;">
      <a class="navbar-brand" href="index.php">TechGadgetsHub</a>
    </div>
  </nav>

  <div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="card p-4 text-center" style="width: 100%; max-width: 400px;">
      <h3>Califícanos</h3>
      <p>Califica tu experiencia en nuestra página web</p>
      <div id="star-rating" class="mb-3">
        <span class="star" data-value="1">&#9733;</span>
        <span class="star" data-value="2">&#9733;</span>
        <span class="star" data-value="3">&#9733;</span>
        <span class="star" data-value="4">&#9733;</span>
        <span class="star" data-value="5">&#9733;</span>
      </div>
      <button type="button" id="submit-rating" class="btn btn-primary">Enviar</button>
      <p id="feedback-message" class="mt-3"></p>
    </div>
  </div>

  <script>
    let rating = 0;
    const stars = document.querySelectorAll('.star');
    const feedbackMessage = document.getElementById('feedback-message');

    stars.forEach(star => {
      star.addEventListener('click', () => {
        rating = star.getAttribute('data-value');
        stars.forEach(s => s.classList.remove('selected'));
        for (let i = 0; i < rating; i++) {
          stars[i].classList.add('selected');
        }
      });
    });

    document.getElementById('submit-rating').addEventListener('click', () => {
      if (rating > 0) {
        fetch('save_rating.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ rating })
        })
        .then(response => response.json())
        .then(data => {
          feedbackMessage.textContent = data.message;
          feedbackMessage.style.color = 'green';
        })
        .catch(error => {
          feedbackMessage.textContent = 'Ocurrió un error al enviar la calificación.';
          feedbackMessage.style.color = 'red';
        });
      } else {
        feedbackMessage.textContent = 'Por favor, selecciona una calificación antes de enviar.';
        feedbackMessage.style.color = 'red';
      }
    });
  </script>
</body>

</html>
