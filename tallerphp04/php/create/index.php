<?php
    error_reporting(E_ALL)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once dirname(__FILE__, 3). '/php/config/header.php';
    ?>
    <title>Creando Registro</title>
</head>
<body>
    <?php
        require_once dirname(__FILE__, 3). '/php/config/menu.php';
    ?>
    <div class="container-md">
        <h2>Creando Registro</h2>
        <form action="create.php" method="post" id="formCreate"> 
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="ingrese Nombre" required autofocus>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="ingrese apellido" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telèfono</label>
            <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="ingrese nro telefono" required>
        </div>
        <div class="mb-3">
            <label for="cedula" class="form-label">Cédula</label>
            <input type="number" class="form-control" name="cedula" id="cedula" placeholder="ingrese cedula" required>
        </div>
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
        </form>
    </div>
</body>
    <?php
        require_once dirname(__FILE__, 3). '/php/config/footer.php';
    ?>
</html>