<?php 
    $boton  = $_POST["fboton"];

    include_once("../modelo/Conectar.php");
    $conexion = new Conectar();
    $conexionbd = $conexion->conectarbd();

    if($boton == "buscar"){
        $id = $_POST["fid"];
        include_once("../modelo/mdBuscarUsuarios.php");
        $modelo = new mdBuscarUsuarios($conexionbd,$id);
        $lib = $modelo->libro();
        $libro = serialize($lib);
        //$libro = urlencode($libro);
        $comp = $modelo->computador();
        $computador = serialize($comp);
        //$computador = urlencode($computador);
        header("location:../vista/tbUsuarios.php?libro=$libro &  computador=$computador & id=$id " );
        
      

        
    }
?>