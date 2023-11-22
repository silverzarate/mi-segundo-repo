
///CREATE MATRICULA......


<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp17/routes.php');
   
    require_once(CONTROLLER_PATH.'matriculaController.php');
    $object = new matriculaController();
    //$cursoes = $object->combolist();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Matriculas</title>
</head>
<body>
    <?php
        require_once(VIEW_PATH.'navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Agregando nuevo registro</h2>
        </div>
        <form id="formPersona" action="store.php" method="post" class="g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input type="date" class="form-control" id="fecha" name="fecha" autofocus required>
                 <div class="invalid-feedback">ingrese o seleccione fecha válida!</div>
            </div>
            <div class="mb-3">
                <label for="idEstudiante" class="form-label">Código estudiante</label>
                <select class="form-control" name="idEstudiante" id="idEstudiante" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($estudiantes as $estudiante) { ?>
                       <option value="<?=$estudiante['idEstudiante']?>"><?=$estudiante['nombre']?></option> 
                    <?php } ?>
                    <!-- completar código -->
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>
            <div class="mb-3">
                <label for="idCurso" class="form-label">Código curso</label>
                <select class="form-control" name="idCurso" id="idCurso" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($cursos as $curso) { ?>
                       <option value="<?=$curso['idCurso']?>"><?=$curso['nombre']?></option> 
                    <?php } ?>
                    <!-- completar código -->
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>
            <div class="mb-3">
                <label for="idUsuario" class="form-label">Código curso</label>
                <select class="form-control" name="idUsuario" id="idUsuario" required>
                    <option selected disabled value="2">Administrador</option>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>                        
            <button type="submit" class="btn btn-primary btn-lg col-4">Guardar</button>
            </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>

</html>



///INDEX MATRICULA////////////////////////////////////////////////////////////////////////////////////////////////////

<?php
     include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp17/routes.php');
     require_once(CONTROLLER_PATH.'matriculaController.php');
     $object = new matriculaController();
     $rows = $object->select();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once (ROOT_PATH . 'header.php') ?>
    <title>Matriculas</title>
</head>
<body>
<?php
        require_once(VIEW_PATH.'navbar/navbar.php');
?>
<section class="intro">
    <div class="container">
        <div class="mb-3"></div>
        <div class="mb-3">
            <a href="create.php" class="btn btn-primary">Agregar</a>
            <a href="javascript:imprimirWindow('ventana')" class="btn btn-info">Imprimir</a>
        </div>
        <div class="table-responsive table-scroll" 
        data-mdb-perfect-scrollbar="true" style="position: relative; height=700px;">
        <table id="myTabla" class="table table-striped mb-0">
            <thead style="background-color: #002d72;">
                <tr>
                    <th scope="col">MATRICULA</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">OPERACIONES</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ((array) $rows as $row) { ?>
                <tr>
                    <td><?=$row['idEstudiante']?></td>
                    <td><?=$row['nombre']?></td>
                    <td><?=$row['apellido']?></td>
                    <td>
                        <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#idver<?=$row['idEstudiante']?>">Ver</a>
                        <a href="edit.php?id=<?=$row['idEstudiante']?>" class="btn btn-warning">Editar</a>
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#iddel<?=$row['idEstudiante']?>">Eliminar</a>

                        <!-- modal para ver y del -->
                        <?php 
                            include ('viewModal.php');
                            include ('deleteModal.php');
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
                    <h2 style="font-size: 3.00rem;">Listado de matriculas</h2>
                </div>
                <div class="table-responsive table-scroll" 
                data-mdb-perfect-scrollbar="true" style="position: relative; height=700px;">
                <table class="table table-striped mb-0" style="font-size: 2.00rem;">
                    <thead>
                        <tr>
                            <th colspan="1" scope="col">MATRICULA</th>
                            <th colspan="1" scope="col">FECHA</th>                            
                            <th colspan="3" scope="col">NOMBRE</th>
                            <th colspan="3" scope="col">APELLIDO</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td colspan="1"><?=$row['idEstudiante']?></td>
                            <td colspan="1"><?=$row['fecha']?></td>                                 
                            <td colspan="4"><?=$row['nombre']?></td>
                            <td colspan="4"><?=$row['apellido']?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>  
        </div>   
        <!-- fin area de impresion -->
</body>
<?php include_once (ROOT_PATH . 'footer.php')  ?>
<script>
    $(document).ready( function () {
        //$('#myTabla').DataTable();
        var table = new DataTable('#myTabla', {
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




