<?php 
    include_once($_SERVER['DOCUMENT_ROOT'].'/tallerphp12/routes.php');
    require_once(MODEL_PATH.'estudianteModel.php');
    
    $object = new estudianteModel();

    $nombre= $_REQUEST['nombre'];
    $apellido= $_REQUEST['apellido'];
    $idCurso= $_REQUEST['idCurso'];
    
    $registro = $object->insertar($nombre, $apellido,$idCurso);

    header('location: index.php')
?>