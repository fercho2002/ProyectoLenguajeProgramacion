<?php

session_start();

    class mdDevolverLibro {
        private $conexion ;
        private $idLibro;
        private $nombreLibro;
        private $idUsuario;
        private $fechaDePrestamo;
        private $fechaDeEntregado;
        private $observacion;
        private $comoVa;
        
        

        function __construct($co,$idLi,$idUs,$ob){

            $this->conexion = $co;
            $this->idLibro = $idLi;
            $this->idUsuario = $idUs;
            $this->observacion = $ob;

        }

        function seleccionar(){
            
            $prestado = "prestado";
            $estado = mysqli_query($this->conexion,"SELECT nombrelibro,fechadeprestamo,fechadeentregado FROM librospre WHERE idusuariopre = '$this->idUsuario' and idlibro = '$this->idLibro' and actualmente = '$prestado' ");
            if(mysqli_num_rows($estado)){
                
                $unlibro = mysqli_fetch_array($estado);
                $this->nombreLibro = $unlibro["nombrelibro"];
                $this->fechaDePrestamo = $unlibro["fechadeprestamo"];
                $this->fechaDeEntregado = $unlibro["fechadeentregado"];
               
         
                $this->comoVa = "seleccionlisto";
            }
            
            else{
                $this->comoVa = "seleccionmal";
                
            
            }
            return $this->comoVa;

            
        }
        
        function editar1(){
            $disponible = "disponible";
            $como = "";
            try{
                $editar = mysqli_query($this->conexion,"UPDATE libros  SET actualmente= '$disponible'   where idlibro = '$this->idLibro'");
                $como = "bien";
                return $como;
            }
            catch(mysqli_sql_exeption $ex){
                $como= "mal";
                return $como;
            }

        }
        function editar2(){
            $como = "";
            $devuelto = "devuelto";
            $disponible = "disponible";
            $prestado = "prestado";
            try{
                $editar = mysqli_query($this->conexion,"UPDATE librospre  SET actualmente= '$devuelto' , retrazo = '$this->observacion' where idlibro = '$this->idLibro' and idusuariopre = '$this->idUsuario' and actualmente = '$prestado'");
                $como = "bien";
                return $como;
            }
            catch(mysqli_sql_exeption $ex){
                $como= "mal";
                return $como;
            }

        }
        function getnombreLibro(){
            return $this->nombreLibro;
        }
        function getfechaDePrestamo(){
            return $this->fechaDePrestamo;
        }
        function getfechaDeEntregado(){
            return $this->fechaDeEntregado;
        }
    }
?>