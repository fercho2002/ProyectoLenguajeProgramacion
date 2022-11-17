<?php
    $ingreso = $_POST["fboton"];
    include_once("../modelo/Conectar.php");
    $objeto = new Conectar();
    $conexion = $objeto->conectarbd();
    //verifica que el boton sea el de ingresar
    if($ingreso=='ingresar'){
        session_start();
        $nik = $_POST["femail"];
        $pass = $_POST["fcontraseña"];
        $ro = "bibliotecario";

        include_once("../modelo/loguin.php");
        $modelo = new loguin($conexion,$ro,$nik,$pass);
        $id = $modelo->verificar();
        $nombre = $modelo->getNombre();
        
        if($id > 0){
            $_SESSION["idU"]=$id;
            $_SESSION["estado"]="si";
            $_SESSION["nombre"]=$nombre;
            header("location:../vista/principal.php");   
            
        }
        else{
            header("location:../vista/loguin.php?mensaje=incorrecto");
        }
    }
?>