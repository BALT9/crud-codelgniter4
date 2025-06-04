<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Codelgniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div>
        <h1>hola mundo</h1>
        <form action="<?= site_url('/insertar') ?>" method="post">
            <label for="">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="">Apellido</label>
            <input type="text" id="apellidos" name="apellidos" required>
            <label for="">Correo</label>
            <input type="email" id="correo" name="correo" required>
            <label for="">telefono</label>
            <input type="number" id="telefono" name="telefono" required>
            <button>Agregar</button>
        </form>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellidos</th>
                    <th scope="col">correo</th>
                    <th scope="col">telefono</th>
                    <th scope="col">acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleados as $empleado): ?>
                    <tr>
                        <th scope="row"><?= $empleado['id'] ?></th>
                        <td><?= $empleado['nombre'] ?></td>
                        <td><?= $empleado['apellidos'] ?></td>
                        <td><?= $empleado['correo'] ?></td>
                        <td><?= $empleado['telefono'] ?></td>
                        <td>
                            <!-- Botón para abrir el modal -->
                            <button type="button" class="btn btn-primary"
                                data-bs-toggle="modal" data-bs-target="#editarModal"
                                data-id="<?= $empleado['id'] ?>"
                                data-nombre="<?= $empleado['nombre'] ?>"
                                data-apellidos="<?= $empleado['apellidos'] ?>"
                                data-correo="<?= $empleado['correo'] ?>"
                                data-telefono="<?= $empleado['telefono'] ?>">
                                Editar
                            </button>

                            <form action="<?= site_url('/eliminar/' . $empleado['id']) ?>" method="post">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Modal para editar -->
    <div class="modal fade" id="editarModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= site_url('/actualizar') ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title">Actualizar Empleado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id" id="edit-id">
                        <div class="mb-2">
                            <label>Nombre</label>
                            <input type="text" name="nombre" id="edit-nombre" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Apellido</label>
                            <input type="text" name="apellidos" id="edit-apellidos" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Correo</label>
                            <input type="email" name="correo" id="edit-correo" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label>Teléfono</label>
                            <input type="number" name="telefono" id="edit-telefono" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script para pasar los datos al modal -->
    <script>
        const editarModal = document.getElementById('editarModal');
        editarModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget.dataset;
            document.getElementById('edit-id').value = button.id;
            document.getElementById('edit-nombre').value = button.nombre;
            document.getElementById('edit-apellidos').value = button.apellidos;
            document.getElementById('edit-correo').value = button.correo;
            document.getElementById('edit-telefono').value = button.telefono;
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>