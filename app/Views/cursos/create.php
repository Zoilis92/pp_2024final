<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Agregar Curso</h1>

        <form action="<?= base_url('cursos/store') ?>" method="post">
            <div class="mb-3">
                <label for="id_carrera" class="form-label">ID Carrera</label>
                <input type="text" name="id_carrera" id="id_carrera" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="creditos" class="form-label">Créditos</label>
                <input type="number" name="creditos" id="creditos" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Curso</button>
        </form>
    </div>
</body>
</html>