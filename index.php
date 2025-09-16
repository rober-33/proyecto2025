<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jagua Vision360</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Jagua Vision360</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Misión</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Visión</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carrusel -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="img/slider1.jpg" class="d-block w-100" alt="Imagen 1">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="carousel-text">Conectamos Oportunidades</h2>
                <p>Tu futuro empieza aquí</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/slider2.jpg" class="d-block w-100" alt="Imagen 2">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="carousel-text">Impulsamos el Progreso</h2>
                <p>Crecemos contigo</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/slider3.jpg" class="d-block w-100" alt="Imagen 3">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="carousel-text">Innovación Local</h2>
                <p>Soluciones digitales para todos</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

    <!-- Secciones -->
    <div class="container">
        <h2 class="section-title">Nosotros</h2>
        <p class="text-center">Somos una plataforma innovadora que conecta oportunidades con las personas de La Jagua de Ibirico.</p>

        <h2 class="section-title">Misión</h2>
        <p class="text-center">Impulsar el crecimiento local mediante soluciones digitales accesibles y efectivas.</p>

        <h2 class="section-title">Visión</h2>
        <p class="text-center">Ser el referente digital más confiable en la región, promoviendo inclusión y progreso sostenible.</p>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2025 Jagua Vision360 - Todos los derechos reservados.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>