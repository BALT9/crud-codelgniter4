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
                        <td><button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>