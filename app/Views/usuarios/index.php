<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Usuarios</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
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
        .dataTables_wrapper .dataTables_filter input {
            background-color: #e0e0e0;
            color: #333;
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
        <!-- Tabla con DataTables -->
        <table id="usuariosTable" class="table table-bordered table-striped">
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

    <!-- Scripts -->
    <!-- jQuery debe cargarse antes de DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#usuariosTable').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente"
                    }
                }
            });
        });
    </script>
</body>
</html>
