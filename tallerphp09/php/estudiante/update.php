<?php
    error_reporting(E_ALL);
    require_once('estudianteModel.php');
    $object = new estudianteModel();

    $idEstudiante = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $codigoCurso = $_REQUEST['codigoCurso'];
    

    $registro = $object->actualizar($idEstudiante,$nombre,$apellido,$codigoCurso);

    
    header('location: index.php');

?>