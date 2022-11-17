<?php 

 class Conectar {
    function conectarbd(){
        $conexion =mysqli_connect("sql204.epizy.com","epiz_33016880","48GI5Gpz8Et6ia","epiz_33016880_proyectouninpahubiblioteca");
        mysqli_query($conexion, "SET NAMES 'utf8' ");
        return $conexion;
      }
      function desconectar($conexion){
        mysqli_close($conexion);
      }
 }
?>