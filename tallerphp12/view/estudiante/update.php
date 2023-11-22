<?php 
    include_once($_SERVER['DOCUMENT_ROOT'].'/tallerphp12/routes.php');
    require_once(MODEL_PATH.'estudianteModel.php');
    
    $object = new estudianteModel();
    $idEstudiante= $_REQUEST['id'];
    $nombre= $_REQUEST['nombre'];
    $apellido= $_REQUEST['apellido'];
    $idCurso= $_REQUEST['idCurso'];
    
    $registro = $object->actualizar($idEstudiante,$nombre, $apellido,$idCurso);

    header('location: index.php');
?>