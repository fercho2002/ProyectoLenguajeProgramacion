<?php
    class mdBuscarUsuarios{

        private $id ;
        private $con ;

        function __construct($cone,$idU){
            $this->con = $cone;
            $this->id = $idU;
        }

        function libro(){
            $nulo = "";
            $li = mysqli_query($this->con,"SELECT idlibro,nombrelibro,fechadeprestamo,fechadeentregado,actualmente,estado,observacion,retrazo FROM librospre where idusuariopre = '$this->id' and idlibro != '$nulo' ");
            $libro = $li->fetch_all();
            return $libro;
        }

        function computador(){
            $nulo = "";
            $com = mysqli_query($this->con,"SELECT marca,modelo,serialequipo,fechadeprestamo,fechadeentregado,actualmente,estado,observacion,retrazo FROM computadorespre where idusuariopre = '$this->id' and marca != '$nulo' ");
            $computador = $com->fetch_all();
            return $computador;
        
        }





    }

  
?>