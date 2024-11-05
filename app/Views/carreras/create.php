<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Carrera</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Agregar Carrera</h2>
        <form action="<?= base_url('carreras/store') ?>" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
            <a href="<?= base_url('carreras') ?>" class="btn btn-secondary mt-3">Cancelar</a>
        </form>
    </div>
</body>
</html>
