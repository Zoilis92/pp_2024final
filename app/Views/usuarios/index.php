<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Gestionar Usuarios</h2>
        <a href="<?= base_url('usuarios/create') ?>" class="btn btn-primary mb-3">Agregar Usuario</a>
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
