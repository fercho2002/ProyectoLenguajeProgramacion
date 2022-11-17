<?php
    $boton = $_POST["fboton"];
    include_once("../modelo/Conectar.php");
    $conexion = new Conectar();
    $conexionbd = $conexion->conectarbd();
    session_start();
    @$idb = $_SESSION["idU"];

    if($boton =="registrar"){
        
        $no = $_POST["fnombre"];
        $ge = $_POST["fgenero"];
        $au = $_POST["fautor"];
        $ma = $_POST["fmateria"];
        $id = $_POST["fid"];
        $es = $_POST["festado"];
        $ob = $_POST["fobservacion"];
        

        include_once("../modelo/mdRegistrarLibro.php");
        $md = new mdRegistrarLibro($conexionbd,$no,$ge,$au,$ma,$id,$es,$ob,$idb);
        $insertar = $md->insertar();
        if($insertar == true){
            header("location:../vista/RegistrarLibro.php?mensaje=insertado");   
        }
        else{
            header("location:../vista/RegistrarLibro.php?mensaje=noinsertado");
        }
    }

?>