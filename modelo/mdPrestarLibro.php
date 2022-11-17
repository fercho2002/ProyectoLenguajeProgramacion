<?php
    class mdPrestarLibro{
        private $idLibroDoy;
        private $conexion;
        private $idbibliotecario ;
        private $nombre;
        private $genero;
        private $autor;
        private $materia;
        private $idLibro;
        private $idUsuario;
        private $estado;
        private $observacion;
        private $actualmente = "disponible";
        private $fechaDePrestamo;
        private $fechaDeEntrega;
        private $comoVa;
        private $pasopaso = "o";
    

    function __construct($con,$idLi,$fechapre,$fechaen,$idus,$idb){
        $this->conexion = $con;
        $this->idLibroDoy = $idLi;
        $this->fechaDePrestamo = $fechapre;
        $this->fechaDeEntrega = $fechaen;
        $this->idUsuario = $idus;
        $this->idbibliotecario = $idb;
        
    }

    function seleccionar(){
        

        
            
            $seleccionar = mysqli_query($this->conexion,"SELECT noidentif,nombrelibro,genero,autor,materia,estado,observacion,idlibro FROM libros WHERE idlibro='$this->idLibroDoy' and actualmente='$this->actualmente'") or die(mysqli_error($this->conexion));
            
            if(mysqli_num_rows($seleccionar)){
                
                $unusuario = mysqli_fetch_array($seleccionar);
                $this->idbibliotecario = $unusuario["noidentif"];
                $this->nombre = $unusuario["nombrelibro"];
                $this->genero = $unusuario["genero"];
                $this->autor = $unusuario["autor"];
                $this->materia = $unusuario["materia"];
                $this->estado = $unusuario["estado"];
                $this->observacion = $unusuario["observacion"];
                $this->idLibro = $unusuario["idlibro"];
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
            $editar = mysqli_query($this->conexion,"UPDATE libros  SET actualmente='$prestado'  where idlibro ='$this->idLibro'");
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
            $insertar = mysqli_query($this->conexion,"INSERT INTO librospre (idbibliotecario,idusuariopre,fechadeprestamo,fechadeentregado,actualmente,nombrelibro,genero,autor,materia,idlibro,estado,observacion) values ('$this->idbibliotecario','$this->idUsuario','$this->fechaDePrestamo','$this->fechaDeEntrega','$prestado','$this->nombre','$this->genero','$this->autor','$this->materia','$this->idLibro','$this->estado','$this->observacion')");
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