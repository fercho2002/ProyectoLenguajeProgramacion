<?php

$boton  = $_POST["fboton"];

include_once("../modelo/Conectar.php");
$conexion = new Conectar();
$conexionbd = $conexion->conectarbd();

if($boton == "autor"){

    $entrada = $_POST["fentrada"];
    include_once("../modelo/mdBuscarAutor.php");
    $modelo = new mdBuscarAutor($conexionbd,$entrada);
    $lib = $modelo->autor();
    $libro = serialize($lib);
    header("location:../vista/buscarLibroAutor.php?libro=$libro & autor=$entrada" );
}
if($boton == "genero"){
    $entrada = $_POST["fentrada"];
    include_once("../modelo/mdBuscarAutor.php");
    $modelo = new mdBuscarAutor($conexionbd,$entrada);
    $lib = $modelo->genero();
    $libro = serialize($lib);
    header("location:../vista/buscarLibroGenero.php?libro=$libro & genero=$entrada" );
}

?>