<?php 
    class mdTablas{

            private $conexionbd;
            function __construct(){
            include_once("Conectar.php");
            $conexion = new Conectar();
            $this->conexionbd = $conexion->conectarbd();
        }

        function tablaLibrosDisponibles(){
            
            $disponible = "disponible";
            $nulo = "";
            $tabla = mysqli_query($this->conexionbd,"SELECT idlibro,nombrelibro,genero,autor FROM libros where actualmente = '$disponible' and nombrelibro != '$nulo' ");
            // $des = $conexionbd->desconectar($conexionbd);
            return $tabla ;
        
        }
        function tablaLibrosPrestados(){
            
            $prestado = "prestado";
            $nulo = "";
            $tabla = mysqli_query($this->conexionbd,"SELECT idlibro,nombrelibro,idusuariopre,fechadeprestamo,fechadeentregado FROM librospre where actualmente = '$prestado' and idlibro != '$nulo'  ");
            return $tabla;
        }

        function tablaEquiposDisponibles(){
            
            $disponible = "disponible";
            $nulo = "";
            $tabla = mysqli_query($this->conexionbd,"SELECT marca,modelo,serialequipo FROM computadores where actualmente = '$disponible' and marca != '$nulo' ");
            return $tabla;
        }

        function tablaEquiposPrestados(){

            $prestado = "prestado";
            $nulo = "";
            $tabla =mysqli_query($this->conexionbd,"SELECT marca,modelo,serialequipo,idusuariopre,fechadeprestamo,fechadeentregado FROM computadorespre where actualmente = '$prestado' and marca != '$nulo'  ");
            return $tabla;
            
        }
        function tablaUsuarios(){
            
        }
        
    }
?>