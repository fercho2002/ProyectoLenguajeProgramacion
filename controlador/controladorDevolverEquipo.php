<?php

    
    $boton = $_POST["fboton"];

    include_once("../modelo/Conectar.php");
    $conexion = new Conectar();
    $conexionbd = $conexion->conectarbd();

    if($boton == "buscar"){
        $idU = $_POST["fidUsuario"];
        $ser = $_POST["fserial"];
        $ob = $_POST["fobservacion"];
        include_once("../modelo/mdDevolverEquipo.php");
        $modelo = new mdDevolverEquipo($conexionbd,$ser,$idU,$ob);
        $buscar = $modelo->seleccionar();
        $marca = $modelo->getmarca();
        $fechapre = $modelo->getfechaDePrestamo();
        $fechaen = $modelo->getfechaDeEntregado();
       
    header("location:../vista/devolverComputador.php? marca=$marca &  fechapre=$fechapre  & fechaen=$fechaen & serial=$ser & idusuario=$idU " );
        
    }
    if($boton == "devolver"){
        $idUsuario = $_POST['fidUsuario'];
        $serial = $_POST['fserial'];
        $observacion = $_POST['fobservacion'];
        include_once("../modelo/mdDevolverEquipo.php");
        $modelo = new mdDevolverEquipo($conexionbd,$serial,$idUsuario,$observacion);
        $estado = $modelo->editar1();
        if($estado == "bien"){
            $estado = $modelo->editar2();
            if($estado == "bien"){
                header("location:../vista/devolverComputador.php?mensaje=devuelto");
            }
            else{
                header("location:../vista/devolverComputador.php?mensaje=nodevuelto");
            }
        }
       
        else{
            header("location:../vista/devolverComputador.php?mensaje=nodevuelto");
        }
    }
  