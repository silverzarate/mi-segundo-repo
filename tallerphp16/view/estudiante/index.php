<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp16/routes.php');
require_once(MODEL_PATH.'estudianteModel.php');
$object = new estudianteModel();
$rows = $object->listar();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <?php
        require_once(ROOT_PATH.'header.php');
    ?>
</head>

<body>
    <?php
    require_once(VIEW_PATH.'navbar/navbar.php');
    ?>
    <section class="intro">
        <div class="container">
            <div class="mb-3">
                <h2>Listado de Estudiantes</h2>
            </div>
            <div class="mb-3">
                <a href="./create.php" class="btn btn-primary">Agregar</a>
                <a href="javascript:imprimirWindow('ventana')" class="btn btn-info">Imprimir</a>
            </div>
            <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height:700px;">
                <table id="tablaEstudiante" class="table table-striped mb-0">
                    <thead style="background-color: #002d72;">
                        <tr>
                            <th scope="col" class="text-white">Id</th>
                            <th scope="col" class="text-white">Nombre</th>
                            <th scope="col" class="text-white">Apellido</th>
                            <th scope="col" class="text-white">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) { ?>
                            <tr>
                                <td><?= $row['idEstudiante'] ?></td>
                                <td><?= $row['nombre'] ?></td>
                                <td><?= $row['apellido'] ?></td>
                                <td>
                                    <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#idver<?= $row['idEstudiante'] ?>">Ver</a>
                                    <a href="edit.php?id=<?= $row['idEstudiante'] ?>" class="btn btn-warning">Editar</a>
                                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#iddel<?= $row['idEstudiante'] ?>">Eliminar</a>

                                    <!-- modal para ver y del-->
                                    <?php
                                    include('viewModal.php');
                                    include('deleteModal.php');
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- div area de impresion -->
    <div class="container" id="ventana" style="display:none;">
        <div class="mb-3">
            <h2 style="font-size: 3.00rem;">Listado de Estudiantes</h2>
        </div>
        <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height:700px;">
            <table class="table table-striped mb-0" style="font-size: 2.00rem;">
                <thead style="background-color: #002d72;">
                    <tr>
                        <th scope="col" colspan="1" class="text-white">Id</th>
                        <th scope="col" colspan="3" class="text-white">Nombre</th>
                        <th scope="col" colspan="3" class="text-white">Apellido</th>
                        <th scope="col" colspan="3" class="text-white">Curso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td colspan="1"><?= $row['idEstudiante'] ?></td>
                            <td colspan="3"><?= $row['nombre'] ?></td>
                            <td colspan="3"><?= $row['apellido'] ?></td>
                            <td colspan="3"><?= $row['curso'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- fin area de impresion -->
</body>
    <?php
        require_once(ROOT_PATH.'footer.php');
    ?>
    <script>
        $(document).ready( function () {
            //$('#tablaEstudiante').DataTable();
            var table = new DataTable('#tablaEstudiante', {
                language: {
                    url: '../../assets/js/es-ES.json',
                },
                'paging': true,
                    lengthMenu: [
                        [5, 10, 25, 50, -1],
                        [5, 10, 25, 50, 'Todos']
                    ]
            });

        } );
    </script>
</html>