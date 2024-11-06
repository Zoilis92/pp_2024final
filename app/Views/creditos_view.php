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
                        <a class="nav-link text-white" href="<?= base_url('creditos') ?>">Créditos</a>
                    </li>
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
                    <th>Imagen Izquierda</th>
                    <th>Imagen Derecha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Descripción del primer crédito de ejemplo. Aquí puedes explicar lo que representa este crédito y otros detalles importantes.</td>
                    <td><img src="https://via.placeholder.com/100" alt="Imagen Izquierda" class="img-left"></td>
                    <td><img src="https://via.placeholder.com/100" alt="Imagen Derecha" class="img-right"></td>
                </tr>
                <tr>
                    <td>Descripción del segundo crédito de ejemplo. Explicación adicional de lo que implica este crédito y cómo se utiliza en el programa académico.</td>
                    <td><img src="https://via.placeholder.com/100" alt="Imagen Izquierda" class="img-left"></td>
                    <td><img src="https://via.placeholder.com/100" alt="Imagen Derecha" class="img-right"></td>
                </tr>
                <tr>
                    <td>Descripción del tercer crédito de ejemplo. Aquí puedes dar detalles adicionales sobre cómo se asignan los créditos y su importancia.</td>
                    <td><img src="https://via.placeholder.com/100" alt="Imagen Izquierda" class="img-left"></td>
                    <td><img src="https://via.placeholder.com/100" alt="Imagen Derecha" class="img-right"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>