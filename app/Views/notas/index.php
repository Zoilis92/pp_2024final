<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container mt-5">
        <h1>Gestión de Notas</h1>
        <a href="<?= base_url('notas/create') ?>" class="btn btn-info">Agregar Nota</a>
        
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <table class="table table-dark mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Inscripción</th>
                    <th>Zona</th>
                    <th>Examen</th>
                    <th>Nota Final</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notas as $nota): ?>
                    <tr>
                        <td><?= $nota['id_nota'] ?></td>
                        <td><?= $nota['id_inscripcion'] ?></td>
                        <td><?= $nota['zona'] ?></td>
                        <td><?= $nota['examen'] ?></td>
                        <td><?= $nota['nota_final'] ?></td>
                        <td>
                            <a href="<?= base_url('notas/edit/' . $nota['id_nota']) ?>" class="btn btn-primary">Editar</a>
                            <form action="<?= base_url('notas/delete/' . $nota['id_nota']) ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-success">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
