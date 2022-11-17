<?php
    
    class mdRegistrarComputador{

        
        
        private $conexion;
        private $idbibliotecario;
        private $marca;
        private $serial;
        private $modelo;
        private $estado;
        private $observacion;
        private $actualmente = "disponible";

        function __construct($co,$ma,$se,$mo,$es,$ob,$idb){
            $this->conexion = $co; 
            $this->idbibliotecario = $idb; 
            $this->marca = $ma;
            $this->serial = $se;
            $this->modelo = $mo;
            $this->estado= $es;
            $this->observacion = $ob;
        }
        function insertar(){
            try {
                $insertar = mysqli_query($this->conexion,"INSERT INTO computadores (noidentif,marca,serialequipo,estado,observacion,modelo,actualmente) values ('$this->idbibliotecario','$this->marca','$this->serial','$this->estado','$this->observacion','$this->modelo','$this->actualmente')") or die(mysqli_error($this->conexion));
                return true;
             } catch (mysqli_sql_exception $e) {
                return false; 
             } 
        }

    }
?>