<?php
    class mdPrestarEquipo{
        private $serialDoy;
        private $conexion;
        private $idbibliotecario ;
        private $marca;
        private $serial;
        private $modelo;
        private $idUsuario;
        private $estado;
        private $observacion;
        private $actualmente = "disponible";
        private $fechaDePrestamo;
        private $fechaDeEntrega;
        private $comoVa;
        private $pasopaso = "o";
    

    function __construct($con,$seri,$fechapre,$fechaen,$idus,$idb){
        $this->conexion = $con;
        $this->serialDoy = $seri;
        $this->fechaDePrestamo = $fechapre;
        $this->fechaDeEntrega = $fechaen;
        $this->idUsuario = $idus;
        $this->idbibliotecario = $idb;
        
    }

    function seleccionar(){
        

        
            
            $seleccionar = mysqli_query($this->conexion,"SELECT noidentif,marca,modelo,estado,observacion,serialequipo FROM computadores WHERE serialequipo= '$this->serialDoy'  and actualmente='$this->actualmente'") or die(mysqli_error($this->conexion));
            
            if(mysqli_num_rows($seleccionar)){
                
                $unusuario = mysqli_fetch_array($seleccionar);
                $this->idbibliotecario = $unusuario["noidentif"];
                $this->marca = $unusuario["marca"];
                $this->modelo = $unusuario["modelo"];
                $this->estado = $unusuario["estado"];
                $this->observacion = $unusuario["observacion"];
                $this->serial = $unusuario["serialequipo"];
                $this->comoVa = "seleccionbien";
                
                
            }
            
            else{
                $this->comoVa = "seleccionmal";
                
            
            }
        
        
            
           return $this->comoVa;
           
        }
        
            
       

    

    function editar(){
        $prestado = "prestado";
        try{
            $editar = mysqli_query($this->conexion,"UPDATE computadores  SET actualmente='$prestado'  where serialequipo ='$this->serial'");
            $this->comoVa = "editarlisto";
            return $this->comoVa;
        }
        catch (mysqli_sql_exception $e) {
            $this->comoVa = "editarmal";
            return $this->comoVa;
         } 
    }
    function insertar(){
        $prestado = "prestado";
        try{    
            $insertar = mysqli_query($this->conexion,"INSERT INTO computadorespre (idbibliotecario,idusuariopre,fechadeprestamo,fechadeentregado,actualmente,marca,modelo,serialequipo,estado,observacion) values ('$this->idbibliotecario','$this->idUsuario','$this->fechaDePrestamo','$this->fechaDeEntrega','$prestado','$this->marca','$this->modelo','$this->serial','$this->estado','$this->observacion')");
            //header("location:../vista/prestarLibro.php?mensaje=$this->idbibliotecario-$this->idUsuario-");
            $this->comoVa = "insertarlisto";
            return $this->comoVa;
        }
        catch (mysqli_sql_exception $e) {
            $this->comoVa = "insertarmal";
            return $this->comoVa;
         } 
    }

    function limpiar(){
        $this->comoVa = null;
    }


    function getcomoVa(){
        return $this->comoVa;
    }

}
?>