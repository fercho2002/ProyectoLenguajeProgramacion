<?php 
    class loguin{
        private $_conexion;
        private $_rol;
        private $_nick;
        private $_password;
        private $_no;
        private $nombre;

        function __construct($conexion,$rol,$nick,$password){
            $this->_conexion = $conexion;
            $this->_rol = $rol;
            $this->_nick = $nick;
            $this->_password = $password;

        }

        function verificar(){
            $verificar = mysqli_query($this->_conexion,"SELECT rol , nik , password , noidentif,nombres FROM usuarios WHERE rol = '$this->_rol' and  nik = '$this->_nick' and password = '$this->_password' ") or die(mysqli_error($this->_conexion));

            if(mysqli_num_rows($verificar)){
                $unusuario = mysqli_fetch_array($verificar);
                $this->_rol = $unusuario["rol"];
                $this->_nick = $unusuario["nik"];
                $this->_password = $unusuario["password"];
                $this->_no = $unusuario["noidentif"];
                $this->nombre = $unusuario["nombres"];
                return $this->_no ;
            }
            return $this->_no;
        }
        function getNombre(){
            return $this->nombre;
        }
    }
?>