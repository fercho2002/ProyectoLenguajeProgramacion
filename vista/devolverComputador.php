
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devolver Equipo </title>
    <link href="../boodstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/generales.css">
</head>
<body>
<content>

      <form id="general" action="../controlador/controladorDevolverEquipo.php" method="post">	 	
      <?php 
           
            @$ser = $_GET['serial'];
            @$idu = $_GET['idusuario'];
            
           ?>
      <a href="principal.php" class="btn btn-success" style="position:absolute; top:20px; right:20px;">volver a inicio</a>
          <div id="diviz" class="divs">
            <div class="divgenerales" id="div1">
              <label class="labelgenerales  ">Identificacion </label>
              <input  id="input1" class="inputgenerales " type="text"  placeholder="id Usuario" name="fidUsuario" value="<?php echo $idu ?>">
          </div>
          <div class="divgenerales" id="div2">
              <label class="labelgenerales  ">Serial Computador </label>
              <input  id="input2" class="inputgenerales" type="text"  placeholder="serial computador" name="fserial" value="<?php echo $ser ?>">
          </div>
          <div >
                <button type="submit" class="btn btn-warning botones " name="fboton" value="buscar" style="margin: 10px 20px;">Buscar</button>
            </div >

           <?php 
           
            @$marca = $_GET['marca'];
            @$fechapre = $_GET['fechapre'];
            @$fechaen = $_GET['fechaen'];
            
           ?>
            
             
          <div class="divgenerales" id="div3">
              <label class="labelgenerales">Marca</label>
             <input  id="input3" class="inputgenerales" type="text"  placeholder="" name="fnombre" value="<?php echo $marca ?>">
          </div>
  
          <div class="divgenerales" id="div5">
              <label class="labelgenerales">Fecha De Prestamo</label>
              <input  id="input5" class="inputgenerales" type="text"  placeholder="" name="ffechaDePrestamo " value="<?php echo $fechapre ?>" >
          </div>
          <div class="divgenerales" id="div6">
             <label class="labelgenerales">Fecha De Entrega</label>
             <input  id="input5" class="inputgenerales" type="text"  placeholder="" name="ffechaDeEntrega" value="<?php echo $fechaen ?> ">
          </div>
            
          <hr  width=100% size=5   color="#ff9900" >
          <div class="divgenerales" id="div7">
              <label class="labelgenerales">Observacion:</label>
          </div>
          <div class="divv" id="div8">
              <input  id="input5" class="inputt" type="text"  placeholder="" name="fobservacion" >
              <label class="labell">Al devolver El Computador pasara a disponible</label>
          </div>
          </div>
         
            <div >
                <button type="submit" class="btn btn-warning botones " name="fboton" value="limpiar" style="margin: 10px 20px; width:120px;"onclick="document.location.reload();">limpiar</button>
            
                <button type="submit" class="btn btn-warning botones " name="fboton" value="devolver" style="margin: 10px 20px; width: 120px;">devolver</button>
            </div>
          </div>
          <?php
                    @$mensaje = $_GET['mensaje'];
                    if (isset($mensaje)){
                    if($mensaje=='devuelto'){
                            echo '<div  class="alert alert-success" role="alert"> Comptador Devuelto</div>';
                        }
                    if($mensaje=='nodevuelto'){
                            echo '<div  class="alert alert-danger" role="alert">error al Devolver Computador</div>';
                        }

                    }
                    ?>
</form>
  </content>  
  <script src="../boodstrap/bootstrap.bundle.js"></script>

</body>
</html>