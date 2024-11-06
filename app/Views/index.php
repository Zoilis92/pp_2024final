<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad Rafael Landivar</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a Font Awesome para los íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            position: relative;
            background-image: url('https://i.ytimg.com/vi/jIlOmUVYJqo/maxresdefault.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
            height: 100vh;
            margin: 0;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: 0;
        }

        .container, .navbar, h1, p, a {
            position: relative;
            z-index: 1;
        }

        .navbar, .footer {
            background-color: #1f3b5b;
            color: white;
        }

        .hero {
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            color: white;
        }

        .btn-primary {
            background-color: #3478C1;
            border: none;
        }

        .btn-primary:hover {
            background-color: #285a8f;
        }
    </style>
</head>
<body>

    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <img src="https://catedra-kolvenbach.url.edu.gt/wp-content/uploads/2024/08/1-1024x356.png" alt="Logotipo" style="width: 150px; height: 60px; margin-right: 10px;">
            <a class="navbar-brand text-white" href="#">URL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('login') ?>">
                            <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('register') ?>">
                            <i class="fas fa-user-plus"></i> Registrarse
                        </a>
                    </li>
                    <!-- Opción Créditos en el menú -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('creditos') ?>">Créditos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección Hero -->
    <section class="hero">
        <div class="container">
            <h1>Bienvenidos a la Universidad Rafael Landivar</h1>
            <p>Formando líderes para el futuro</p>
            <a href="<?= base_url('register') ?>" class="btn btn-primary btn-lg mt-4">Empieza Ahora</a>
        </div>
    </section>

    <!-- Información de la Universidad -->
    <section class="py-5">
        <div class="container text-white">
            <div class="row text-center">
                <div class="col-md-4">
                    <h3>Excelencia Académica</h3>
                    <p>Ofrecemos programas de alta calidad en diversas áreas de estudio.</p>
                </div>
                <div class="col-md-4">
                    <h3>Campus Moderno</h3>
                    <p>Instalaciones de primer nivel para una experiencia universitaria completa.</p>
                </div>
                <div class="col-md-4">
                    <h3>Oportunidades Internacionales</h3>
                    <p>Acceso a programas de intercambio y cooperación internacional.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Página Créditos -->
    <section class="py-5">
        <div class="container text-white">
            <h2>Agregar Información de Créditos</h2>
            <form action="<?= base_url('creditos/guardar') ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="info_creditos" class="form-label">Información de Créditos</label>
                    <textarea id="info_creditos" name="info_creditos" class="form-control" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="imagen1" class="form-label">Imagen 1</label>
                    <input type="file" id="imagen1" name="imagen1" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="imagen2" class="form-label">Imagen 2</label>
                    <input type="file" id="imagen2" name="imagen2" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Créditos</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-4 text-center">
        <p class="mb-0">© 2024 Universidad Rafael Landivar. Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
