<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome para iconos -->
    <style>
        body {
            background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/hd/4335ba68672237.5b64d05721cd3.jpg');
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
    </style>
    <script>
        function imprimirPagina() {
            window.print();
        }
    </script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Gestionar Usuarios</h2>
        <div class="d-flex justify-content-between mb-3">
            <a href="<?= base_url('usuarios/create') ?>" class="btn btn-danger">Agregar Usuario</a>
            <button onclick="imprimirPagina()" class="btn btn-danger">
                <i class="fas fa-print"></i> Imprimir - Descargar PDF
            </button>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= $usuario['id_usuario'] ?></td>
                        <td><?= $usuario['username'] ?></td>
                        <td><?= $usuario['apellido'] ?></td>
                        <td><?= $usuario['email'] ?></td>
                        <td><?= $usuario['rol'] ?></td>
                        <td>
                            <a href="<?= base_url('usuarios/edit/'.$usuario['id_usuario']) ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="<?= base_url('usuarios/delete/'.$usuario['id_usuario']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
