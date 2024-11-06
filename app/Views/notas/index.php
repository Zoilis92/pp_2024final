<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Notas</title>
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
            Gestión de Notas
            <!-- Ícono de impresión -->
            <span class="print-icon" onclick="imprimirPDF()" title="Imprimir o Descargar PDF">
                Imprimir/Descarga PDF
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M19 8H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h2v-4h10v4h2c1.1 0 2-.9 2-2v-8c0-1.1-.9-2-2-2zm0 10h-2v-4H7v4H5v-8h14v8zM17 1H7c-1.1 0-2 .9-2 2v4h2V3h10v4h2V3c0-1.1-.9-2-2-2z"/>
                </svg>
            </span>
        </h1>
        <a href="<?= base_url('notas/create') ?>" class="btn btn-info">Agregar Nota</a>
        
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <table class="table table-dark mt-3" id="tablaNotas">
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
