<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp17/routes.php');

    require_once(CONTROLLER_PATH.'matriculaController.php');
    $object = new matriculaController();

    $idEstudiante = $_REQUEST['id'];  
    $object->delete($idEstudiante);

?>
    
