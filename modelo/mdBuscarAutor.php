<?php

    class mdBuscarAutor{
        private $in ;
        private $conexion ;
        
        function __construct($con,$au){

            $this->conexion = $con;
            $this->in = $au;

        }

        function autor(){
            $disponible = "disponible";
            $nulo = "";
            $aut = mysqli_query($this->conexion,"SELECT idlibro,nombrelibro,genero,estado,observacion FROM libros where actualmente = '$disponible' and nombrelibro != '$nulo' and autor = '$this->in' ");
            $autor = $aut->fetch_all();
            return $autor;
        }
        function genero(){
            $disponible = "disponible";
            $nulo = "";
            $gen = mysqli_query($this->conexion,"SELECT idlibro,nombrelibro,autor,estado,observacion FROM libros where actualmente = '$disponible' and nombrelibro != '$nulo' and genero = '$this->in' ");
            $genero = $gen->fetch_all();
            return $genero;
        }
    }

?>