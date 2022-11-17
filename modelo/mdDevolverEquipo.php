<?php

session_start();

    class mdDevolverEquipo {
        private $conexion ;
        private $serial;
        private $marca;
        private $idUsuario;
        private $fechaDePrestamo;
        private $fechaDeEntregado;
        private $observacion;
        private $comoVa;
        
        

        function __construct($co,$ser,$idUs,$ob){

            $this->conexion = $co;
            $this->serial = $ser;
            $this->idUsuario = $idUs;
            $this->observacion = $ob;

        }

        function seleccionar(){
            
            $prestado = "prestado";
            $estado = mysqli_query($this->conexion,"SELECT marca,fechadeprestamo,fechadeentregado FROM computadorespre WHERE idusuariopre = '$this->idUsuario' and serialequipo = '$this->serial' and actualmente = '$prestado'");
                                                    
            if(mysqli_num_rows($estado)){
                
                $unEquipo = mysqli_fetch_array($estado);
                $this->marca = $unEquipo["marca"];
                $this->fechaDePrestamo = $unEquipo["fechadeprestamo"];
                $this->fechaDeEntregado = $unEquipo["fechadeentregado"];
               
         
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
                $editar = mysqli_query($this->conexion,"UPDATE computadores  SET actualmente= '$disponible'   where serialequipo = '$this->serial'");
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
                $editar = mysqli_query($this->conexion,"UPDATE computadorespre  SET actualmente= '$devuelto' , retrazo = '$this->observacion' where serialequipo = '$this->serial' and idusuariopre = '$this->idUsuario' and actualmente = '$prestado'");
                $como = "bien";
                return $como;
            }
            catch(mysqli_sql_exeption $ex){
                $como= "mal";
                return $como;
            }

        }
        function getmarca(){
            return $this->marca;
        }
        function getfechaDePrestamo(){
            return $this->fechaDePrestamo;
        }
        function getfechaDeEntregado(){
            return $this->fechaDeEntregado;
        }
    }
?>