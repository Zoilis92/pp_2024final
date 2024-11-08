<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Docente</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    <style>
        body {
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/5/50/Landivar_Campus_Central.jpg'); /* Cambia esta URL por la de tu imagen */
            background-size: cover; /* Cubre toda la pantalla */
            background-repeat: no-repeat; /* No repetir la imagen */
            color: white; /* Texto en blanco para mayor contraste */
        }
        .navbar {
            background-color: rgba(233, 247, 253, 0.8); /* Fondo semi-transparente para la navbar */
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5); /* Fondo oscuro semi-transparente para el contenedor */
            padding: 20px;
            border-radius: 8px;
            margin-top: 100px; /* Separar el contenedor del borde superior */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Panel de Docente</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?= base_url('cursos') ?>"><i class="fas fa-book-open"></i> Gestión de Cursos</a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?= base_url('notas') ?>"><i class="fas fa-users"></i> Gestión de Notas</a>
                </li>
                <li class="nav-item">
    <a class="nav-link text-dark" href="<?= base_url('logout') ?>"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
</li>
            </ul>
        </div>
    </nav>
    
    <div class="container mt-5">
        <h1>Bienvenido Docente</h1>
        <p>Aquí puedes gestionar tus cursos y alumnos.</p>
    </div>
    <center>
    <img src="https://principal.url.edu.gt/wp-content/uploads/2022/09/COU_como-ser-landivariano_agenda-e1662074608479.jpg" alt="Logotipo" >
    </center>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
