<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Carreras</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Listado de Carreras</h2>
        <a href="<?= base_url('carreras/create') ?>" class="btn btn-primary mb-3">Agregar Carrera</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carreras as $carrera): ?>
                    <tr>
                        <td><?= $carrera['id_carrera'] ?></td>
                        <td><?= $carrera['nombre'] ?></td>
                        <td><?= $carrera['descripcion'] ?></td>
                        <td>
                            <a href="<?= base_url('carreras/edit/'.$carrera['id_carrera']) ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="<?= base_url('carreras/delete/'.$carrera['id_carrera']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta carrera?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
