<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Editar Usuario</h2>
        <?php if (isset($validation)): ?>
            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
        <?php endif; ?>
        <form action="<?= base_url('usuarios/update/' . $usuario['id_usuario']) ?>" method="post">
            <div class="form-group">
                <label for="username">Nombre de Usuario</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= esc($usuario['username']) ?>" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" value="<?= esc($usuario['apellido']) ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= esc($usuario['email']) ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control">
                <small class="text-muted">Déjalo en blanco si no deseas cambiar la contraseña.</small>
            </div>
            <div class="form-group">
                <label for="rol">Rol</label>
                <select name="rol" id="rol" class="form-control" required>
                    <option value="estudiante" <?= $usuario['rol'] == 'estudiante' ? 'selected' : '' ?>>Estudiante</option>
                    <option value="docente" <?= $usuario['rol'] == 'docente' ? 'selected' : '' ?>>Docente</option>
                    <option value="administrador" <?= $usuario['rol'] == 'administrador' ? 'selected' : '' ?>>Administrador</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Actualizar Usuario</button>
        </form>
    </div>
</body>
</html>
