<?php
   $boton = $_POST["fboton"]; 
   include_once("../modelo/Conectar.php");
   $objeto = new Conectar();
   $conexion = $objeto->conectarbd();
   session_start();
    @$idb = $_SESSION["idU"];
   if($boton == "prestar"){
       $idlibro = $_POST["fidlibro"];
       $fechapre = $_POST["ffechapre"];
       $fechaen = $_POST["ffechaen"];
       $idus = $_POST["fidus"];
       include_once("../modelo/mdPrestarLibro.php");
       $modelo = new mdPrestarLibro($conexion,$idlibro,$fechapre,$fechaen,$idus,$idb);
       $estado = $modelo->seleccionar();
       
                    if($estado == "seleccionbien"){
                            $estado = $modelo->editar();
                            if($estado == "editarlisto"){
                               $estado = $modelo->insertar();
                                if($estado == "insertarlisto"){
                                  $como = $modelo->getcomoVa();
                                    header("location:../vista/prestarLibro.php?mensaje=prestado");
                                    }
                                else{
                                    header("location:../vista/prestarLibro.php?mensaje=noprestado");
                                    }
                                }
                                else{
                                    header("location:../vista/prestarLibro.php?mensaje=editar");
                                }
                                
                            }
                            else{
                                header("location:../vista/prestarLibro.php?mensaje=seleccionar");
                            }
                   }
        
        
       
                  
                  
?>