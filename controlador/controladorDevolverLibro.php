<?php

    
    $boton = $_POST["fboton"];

    include_once("../modelo/Conectar.php");
    $conexion = new Conectar();
    $conexionbd = $conexion->conectarbd();

    if($boton == "buscar"){
        $idU = $_POST["fidUsuario"];
        $idl = $_POST["fidLibro"];
        $ob = $_POST["fobservacion"];
        include_once("../modelo/mdDevolverLibro.php");
        $modelo = new mdDevolverLibro($conexionbd,$idl,$idU,$ob);
        $buscar = $modelo->seleccionar();
        $nombre = $modelo->getnombrelibro();
        $fechapre = $modelo->getfechaDePrestamo();
        $fechaen = $modelo->getfechaDeEntregado();
        session_start();
        $_SESSION['nombreLibro'] = $nombre;
        header("location:../vista/devolverLibro.php?nombre=$nombre &  fechapre=$fechapre  & fechaen=$fechaen & idlibro=$idl & idusuario=$idU " );
        
    }
    if($boton == "devolver"){
        $idUsuario = $_POST['fidUsuario'];
        $idLibro = $_POST['fidLibro'];
        $observacion = $_POST['fobservacion'];
        include_once("../modelo/mdDevolverLibro.php");
        $modelo = new mdDevolverLibro($conexionbd,$idLibro,$idUsuario,$observacion);
        $estado = $modelo->editar1();
        if($estado == "bien"){
            $estado = $modelo->editar2();
            if($estado == "bien"){
                header("location:../vista/devolverLibro.php?mensaje=devuelto");
            }
            else{
                header("location:../vista/devolverLibro.php?mensaje=nodevuelto");
            }
        }
       
        else{
            header("location:../vista/devolverLibro.php?mensaje=nodevuelto");
        }
    }
  
?>