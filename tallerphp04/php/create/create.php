<?php
    error_reporting(E_ALL)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once dirname(__FILE__, 3). '/php/config/header.php';
    ?>
    <title>Recovew Records</title>
</head>
<body>
    <?php
        require_once dirname(__FILE__, 3). '/php/config/menu.php';
    ?>
    <div class="container-md">
        <?php
            $saltolinea = "\n";
            $fichero = fopen("../datos.txt","a") or die ("Problema en la creación");
            fputs($fichero, $_POST['nombre'].$saltolinea);
            fputs($fichero, $_POST['apellido'].$saltolinea);
            fputs($fichero, $_POST['telefono'].$saltolinea);
            fputs($fichero, $_POST['cedula'].$saltolinea);
            fputs($fichero, nl2br( "---------------------" ). $saltolinea);
            fclose($fichero);
            echo "<h3>Datos guardados correctmente!<h3>";
        ?>
    </div>
</body>
    <?php
        require_once dirname(__FILE__, 3). '/php/config/footer.php';
    ?>
</html>