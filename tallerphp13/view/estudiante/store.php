<?php 
    include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp13/routes.php');
    require_once(CONTROLLER_PATH.'estudianteController.php');
    $object = new estudianteController();

    $nombre= $_REQUEST['nombre'];
    $apellido= $_REQUEST['apellido'];
    $idCurso= $_REQUEST['idCurso'];
    
    $registro = $object->insert($nombre, $apellido,$idCurso);

    header('location: index.php')
?>