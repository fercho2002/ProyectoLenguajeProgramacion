<?php
    class mdRegistrarLibro{
        private $conexion;
        private $idbibliotecario;
        private $nombre;
        private $genero;
        private $autor;
        private $materia;
        private $id;
        private $estado;
        private $observacion;
        private $actualmente = "disponible";

        function __construct($co,$no,$ge,$au,$ma,$id,$es,$ob,$idb){
            $this->conexion = $co; 
            $this->idbibliotecario = $idb; 
            $this->nombre = $no;
            $this->genero = $ge;
            $this->autor = $au;
            $this->materia = $ma;
            $this->id = $id;
            $this->estado = $es;
            $this->observacion = $ob;
        }
        function insertar(){
            try {
                $insertar = mysqli_query($this->conexion,"INSERT INTO libros (noidentif,nombrelibro,genero,autor,materia,estado,observacion,idlibro,actualmente) VALUES ('$this->idbibliotecario','$this->nombre','$this->genero','$this->autor','$this->materia','$this->estado','$this->observacion','$this->id','$this->actualmente')") or die(mysqli_error($this->conexion));
                return true;
             } catch (mysqli_sql_exception $e) {
                return false; 
             } 
        }

    }
?>