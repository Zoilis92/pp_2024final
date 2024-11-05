<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Nota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Nota</h1>

        <form action="<?= base_url('notas/update/' . $nota['id_nota']) ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="id_inscripcion" class="form-label">ID Inscripción</label>
                <input type="text" name="id_inscripcion" id="id_inscripcion" class="form-control" value="<?= $nota['id_inscripcion'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="zona" class="form-label">Zona</label>
                <input type="text" name="zona" id="zona" class="form-control" value="<?= $nota['zona'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="examen" class="form-label">Examen</label>
                <input type="text" name="examen" id="examen" class="form-control" value="<?= $nota['examen'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="nota_final" class="form-label">Nota Final</label>
                <input type="number" name="nota_final" id="nota_final" class="form-control" value="<?= $nota['nota_final'] ?>" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-warning">Actualizar Nota</button>
        </form>
    </div>
</body>
</html>
