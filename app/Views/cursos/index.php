<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados para la tabla y los botones */
        .table {
            background-color: #f8f9fa; /* Color de fondo de la tabla */
            border-radius: 5px; /* Bordes redondeados */
            overflow: hidden; /* Oculta esquinas */
        }

        .table thead th {
            background-color: #1f3b5b; /* Color de fondo del encabezado */
            color: white; /* Color de texto del encabezado */
        }

        .table tbody tr:hover {
            background-color: #e9ecef; /* Color al pasar el ratón sobre la fila */
        }

        .btn-primary {
            background-color: #007bff; /* Azul más claro para el botón Agregar */
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Azul más oscuro al pasar el mouse */
        }

        .btn-warning {
            background-color: #ffc107; /* Color de fondo del botón Editar */
            border: none;
        }

        .btn-warning:hover {
            background-color: #e0a800; /* Color más oscuro al pasar el mouse */
        }

        .btn-danger {
            background-color: #dc3545; /* Color de fondo del botón Eliminar */
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333; /* Color más oscuro al pasar el mouse */
        }
    </style>
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
        <h1>Gestión de Cursos</h1>
        <a href="<?= base_url('cursos/create') ?>" class="btn btn-primary">Agregar Curso</a>
        
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Créditos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cursos as $curso): ?>
                    <tr>
                        <td><?= $curso['id_curso'] ?></td>
                        <td><?= $curso['nombre'] ?></td>
                        <td><?= $curso['descripcion'] ?></td>
                        <td><?= $curso['creditos'] ?></td>
                        <td>
                            <a href="<?= base_url('cursos/edit/' . $curso['id_curso']) ?>" class="btn btn-success">Editar</a>
                            <form action="<?= base_url('cursos/delete/' . $curso['id_curso']) ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-info">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
