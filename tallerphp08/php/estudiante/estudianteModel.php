<?php
    class estudianteModel {
        private $PDO;

        public function __construct(){
            require_once('../database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();

        }

        public function insertar($nombre,$apellido,$codigoCurso) {
            $sql = 'INSERT INTO estudiantes VALUES (0,:nombre,:apellido,:codigoCurso)';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre',$nombre);
            $statement->bindParam(':apellido',$apellido);
            $statement->bindParam(':codigoCurso',$codigoCurso);
            $statement->execute();
            
            echo $this->PDO->lastInsertId();
    
           // return ($this->PDO->lastInsertId());

        }
        public function actualizar($idEstudiante,$nombre,$apellido,$codigoCurso) {
            $sql = 'UPDATE estudiantes SET nombre=:nombre,apellido=:apellido,codigoCurso=:codigoCurso WHERE idEstudiante = :idEstudiante ';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre',$nombre);
            $statement->bindParam(':apellido',$apellido);
            $statement->bindParam(':codigoCurso',$codigoCurso);
            $statement->bindParam(':idEstudiante',$idEstudiante);
            $statement->execute();
            return ($statement->execute()) ? true : false;

        }
        public function eliminar($idEstudiante) {
            $sql = 'DELETE FROM estudiantes WHERE idEstudiante = :idEstudiante ';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idEstudiante',$idEstudiante);
            $statement->execute();
            return ($statement->execute()) ? true : false;

        }

        public function listar(){
            $sql = 'SELECT idEstudiante,nombre,apellido,codigoCurso, if(codigoCurso=1,"VUE",if(codigoCurso=2,"RUBY","PHP")) as curso FROM estudiantes ORDER BY idEstudiante DESC';    
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchALL() : false;

        }
        public function buscar($idEstudiante){
            $sql = 'SELECT * FROM estudiantes WHERE idEstudiante = :idEstudiante';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idEstudiante',$idEstudiante);
            return ($statement->execute()) ? $statement->fetch() : false;

        }
    }

?>    