<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/tallerphp18/routes.php');
    require_once(CONTROLLER_PATH.'estudianteController.php');
    $object = new estudianteController();

    $idEstudiante = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $idCurso = $_REQUEST['idCurso'];
    
    $registro = $object->update($idEstudiante,$nombre,$apellido,$idCurso);


?>