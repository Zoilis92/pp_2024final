<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados para la tabla y los botones */
        .table {
            background-color: #f8f9fa;
            border-radius: 5px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #1f3b5b;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-warning {
            background-color: #ffc107;
            border: none;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

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

        /* Estilo para el botón de impresión */
        .print-icon {
            font-size: 24px;
            cursor: pointer;
            color: #fff;
            float: right;
            margin-top: -40px;
            margin-right: 10px;
        }
        .print-icon svg {
            width: 100px;
            height: 100px;
            fill: #fff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>
            Gestión de Cursos
            <!-- Ícono de impresión -->
            <span class="print-icon" onclick="imprimirPDF()" title="Imprimir o Descargar PDF">
                Imprimir/descargar PDF
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M19 8H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h2v-4h10v4h2c1.1 0 2-.9 2-2v-8c0-1.1-.9-2-2-2zm0 10h-2v-4H7v4H5v-8h14v8zM17 1H7c-1.1 0-2 .9-2 2v4h2V3h10v4h2V3c0-1.1-.9-2-2-2z"/>
                </svg>
            </span>
        </h1>
        <a href="<?= base_url('cursos/create') ?>" class="btn btn-primary">Agregar Curso</a>
        
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <table class="table mt-3" id="tablaCursos">
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

    <script>
        function imprimirPDF() {
            // Oculta el botón de impresión antes de imprimir
            document.querySelector('.print-icon').style.display = 'none';
            
            // Abre el diálogo de impresión
            window.print();
            
            // Restaura el botón de impresión después de imprimir
            document.querySelector('.print-icon').style.display = 'block';
        }
    </script>
</body>
</html>
