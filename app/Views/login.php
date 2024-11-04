<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Iniciar Sesión</title>
</head>
<body class="bg-dark text-white">
    <div class="container">
        <h2 class="mt-5">Iniciar Sesión</h2>

        <?php if (session()->getFlashdata('error')): ?> <!-- Mensaje de error -->
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('loginProcess') ?>" method="post"> <!-- Cambiado a loginProcess -->
            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" class="form-control" name="email" id="correo" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña</label>
                <input type="password" class="form-control" name="password" id="contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
