<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Cursos - Estudiantes</title>
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
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Asignar Carrera</h1>

        <form id="asignarForm">
            <table class="table table-dark mt-3">
                <thead>
                    <tr>
                        <th>Seleccionar</th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($carreras as $carrera): ?>
                        <tr>
                            <td><input type="radio" name="carrera" value="<?= $carrera['id_carrera'] ?>" /></td>
                            <td><?= $carrera['id_carrera'] ?></td>
                            <td><?= $carrera['nombre'] ?></td>
                            <td><?= $carrera['descripcion'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <button type="submit" class="btn btn-success">Asignar</button>
        </form>

        <!-- Mensaje de éxito (invisible por defecto) -->
        <div id="mensajeExito" class="alert alert-success mt-3" style="display: none;">
            Curso asignado exitosamente
        </div>

        <!-- Botón de Imprimir -->
        <button id="btnImprimir" class="btn btn-primary mt-3" style="display: none;">Imprimir Carrera Asignada</button>
    </div>

    <script>
        // Función para manejar el evento del formulario
        document.getElementById("asignarForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevenir el envío del formulario

            // Verificar si hay una carrera seleccionada
            const carreraSeleccionada = document.querySelector('input[name="carrera"]:checked');
            if (carreraSeleccionada) {
                // Mostrar el mensaje de éxito
                document.getElementById("mensajeExito").style.display = "block";

                // Mostrar el botón de Imprimir
                document.getElementById("btnImprimir").style.display = "inline-block";
            } else {
                alert("Por favor, selecciona una carrera.");
            }
        });

        // Función para imprimir la carrera seleccionada
        document.getElementById("btnImprimir").addEventListener("click", function() {
            const carreraSeleccionada = document.querySelector('input[name="carrera"]:checked');
            if (carreraSeleccionada) {
                // Obtener la fila de la carrera seleccionada
                const fila = carreraSeleccionada.closest("tr");

                // Crear un contenido solo con esa fila para impresión
                const contenidoImprimir = `
                    <html>
                        <head>
                            <title>Carrera Asignada</title>
                            <style>
                                body { font-family: Arial, sans-serif; color: #000; }
                                .table { width: 100%; border-collapse: collapse; }
                                .table th, .table td { padding: 8px 12px; border: 1px solid #ddd; text-align: left; }
                            </style>
                        </head>
                        <body>
                            <h2>Carrera Asignada</h2>
                            <table class="table">
                                <tr><th>ID</th><th>Nombre</th><th>Descripción</th></tr>
                                ${fila.innerHTML}
                            </table>
                        </body>
                    </html>
                `;

                // Abrir una nueva ventana para la impresión
                const ventanaImpresion = window.open('', '', 'height=600,width=800');
                ventanaImpresion.document.write(contenidoImprimir);
                ventanaImpresion.document.close();
                ventanaImpresion.print();
            }
        });
    </script>
</body>
</html>
