<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Agregar Usuario</h2>
        <form action="<?= base_url('usuarios/store') ?>" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Nombre</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="rol" class="form-label">Rol</label>
                <select name="rol" id="rol" class="form-control">
                    <option value="estudiante">Estudiante</option>
                    <option value="docente">Docente</option>
                    <option value="administrador">Administrador</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="<?= base_url('usuarios') ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
