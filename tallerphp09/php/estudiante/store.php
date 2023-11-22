<?php
    error_reporting(E_ALL);
    require_once('estudianteModel.php');
    $object = new estudianteModel();

    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $codigoCurso = $_REQUEST['codigoCurso'];
    

    $registro = $object->insertar($nombre,$apellido,$codigoCurso);

    
    header('location: index.php');

?>