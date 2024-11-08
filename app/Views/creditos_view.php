<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créditos - Información</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/5/50/Landivar_Campus_Central.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
        }
        .navbar {
            background-color: rgba(233, 247, 253, 0.8);
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 8px;
            margin-top: 100px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .img-left {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }
        .img-right {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }
        .img-container {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Universidad Rafael Landivar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('logout') ?>">Inicio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido -->
    <div class="container mt-5">
        <h1>Información de Créditos</h1>

        <table class="table table-dark mt-3">
            <thead>
                <tr>
                    <th>Descripción</th>
                    <th>USAC</th>
                    <th>EFPEM</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>Zoila Beatriz Sumalé Buezo</b>
                        <br>
                       <b> Carne 201015729</b>
                        <br>
                        Base de datos
                        <br>
                        Creación del repositorio en GIThUB
                        <br>
                        Administradora del proyecto
                        <br>
                        Creación de la pagina principal de la aplicación "index" general del proyecto
                        <br>
                        Creación de la barra de navegación 
                        <br>
                        Pagina y funcionalidad del Registro de usuarios 3 tipos de usuarios diferentes "administrador, docente y alumno"
                        Inico de Sesión general 
                        <br>
                        Procesos CRUD de la vista de administrador, creación de rutas, Controladores, modelos y vistas 
                        <br>
                        Procesos CRUD en GESTIONAR USUARIOS Y GESTIONAR CARRERAS 
                        <br>
                        Creación de la tabla 
                        <br>
                        Creación de botón de imprimir, buscar, agregar, eliminar
                        <br>
                        Implementación de data table en las tablas de mis procesos CRUD 
                        <br>
                        Implementación y funcionalidad del boton cerrar sesión en mi pagina de administrador 
                        <br>
                        Creacióon de página de CREDITOS 
                        <br>

                    </td>
                    <td><img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Usac_logo.png" alt="USAC" class="img-left"></td>
                    <td><img src="https://pbs.twimg.com/profile_images/1093664166114721797/LW3fXiVq_400x400.jpg" alt="Imagen Derecha" width=40px height=40px class="img-right"></td>
                </tr>
                <tr>
                    <td>Descripción del segundo crédito de ejemplo. Explicación adicional de lo que implica este crédito y cómo se utiliza en el programa académico.</td>
                    <td><img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Usac_logo.png" alt="USAC" class="img-left"></td>
                    <td><img src="https://pbs.twimg.com/profile_images/1093664166114721797/LW3fXiVq_400x400.jpg" alt="Imagen Derecha" class="img-right"></td>
                </tr>
                <tr>
                    <td>Descripción del tercer crédito de ejemplo. Aquí puedes dar detalles adicionales sobre cómo se asignan los créditos y su importancia.</td>
                    <td><img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Usac_logo.png" alt="USAC" class="img-left"></td>
                    <td><img src="https://pbs.twimg.com/profile_images/1093664166114721797/LW3fXiVq_400x400.jpg" alt="Imagen Derecha" class="img-right"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
