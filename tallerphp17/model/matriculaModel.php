<?php
    class matriculaModel {
        private $PDO;
        
        public function __construct(){
            include_once ($_SERVER['DOCUMENT_ROOT'].'/tallerphp17/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }
        public function insertar($nombre,$apellido,$idCiudad) {
            $sql = 'INSERT INTO estudiantes VALUES (0,:nombre,:apellido,:idCiudad)';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre',$nombre);
            $statement->bindParam(':apellido',$apellido);
            $statement->bindParam(':idCiudad',$idCiudad);
            $statement->execute();
            return ($this->PDO->lastInsertId());
        }

        public function actualizar($idEstudiante,$nombre,$apellido,$idCiudad) {
            $sql = 'UPDATE estudiantes SET nombre=:nombre,apellido=:apellido,idCiudad=:idCiudad WHERE idEstudiante=:idEstudiante';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':nombre',$nombre);
            $statement->bindParam(':apellido',$apellido);
            $statement->bindParam(':idCiudad',$idCiudad);
            $statement->bindParam(':idEstudiante',$idEstudiante);
            return ($statement->execute()) ? true : false;
        }

        public function eliminar($idEstudiante) {
                $sql = 'DELETE FROM estudiantes WHERE idEstudiante=:idEstudiante';
                $statement = $this->PDO->prepare($sql);
                $statement->bindParam(':idEstudiante',$idEstudiante);
                return ($statement->execute()) ? true : false;
        }
        public function listar() {
            $sql = 'SELECT e.idEstudiante,e.nombre,e.apellido,e.idCiudad,c.nombre ciudad FROM estudiantes e JOIN ciudades c ON e.idCiudad = c.idCiudad ORDER BY idEstudiante DESC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        public function cargarDesplegable() {
            $sql = 'SELECT idCiudad,nombre FROM ciudades ORDER BY idCiudad ASC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        public function buscar($idEstudiante) {
            $sql = 'SELECT e.idEstudiante,e.nombre,e.apellido,e.idCiudad,c.nombre ciudad FROM estudiantes e JOIN ciudades c ON e.idCiudad = c.idCiudad WHERE idEstudiante = :idEstudiante';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idEstudiante',$idEstudiante);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
}
?>
        

       
