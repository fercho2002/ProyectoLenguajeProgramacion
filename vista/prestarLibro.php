<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestar Libro </title>
    <link href="../boodstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/generales.css">
</head>
<body>
<?php 
                    
                    session_start();
                    @$id = $_SESSION["idU"];

                ?>
<content>

      <form id="general" action="../controlador/controladorPrestarLibro.php" method="post">	 	
      
      <a href="principal.php" class="btn btn-success" style="position:absolute; top:20px; right:20px;">volver a inicio</a>
          <div id="diviz" class="divs">
            <div class="divgenerales" id="div1">
              <label class="labelgenerales  ">Id Libro</label>
              <input  id="input1" class="inputgenerales " type="text"  name="fidlibro">
          </div>
          <div class="divgenerales" id="div2">
             <label class="labelgenerales">Id bibliotecario:</label>
             <input  id="input1" class="inputgenerales " type="text" disabled name="fff" value="<?php echo $id ?>">
          </div>
          <div class="divgenerales" id="div3">
              <label class="labelgenerales">id Usuario</label>
              <input  id="input3" class="inputgenerales" type="text"  name="fidus">
          </div>
          <div class="divgenerales" id="div4">
              <label class="labelgenerales">Fecha De Prestamo</label>
              <input  id="input4" class="inputgenerales" type="date"   name="ffechapre">
          </div>
          <div class="divgenerales" id="div5">
              <label class="labelgenerales">fecha de vuelta</label>
              <input  id="input5" class="inputgenerales" type="date" placeholder="dd-mm-yyyy" name="ffechaen" >
          </div>
          
          </div>
         <div id="divab">
            
            <div >
                <button type="submit" class="btn btn-warning botones " name="fboton" value="prestar" style="margin: 20px 20px;">Prestar</button>
            </div>
          </div>
          <?php
                    @$mensaje = $_GET['mensaje'];
                    if (isset($mensaje)){
                    if($mensaje=='prestado'){
                            echo '<div  class="alert alert-success" role="alert"> Prestado Correctamente</div>';
                        }
                    else{
                            echo '<div  class="alert alert-danger" role="alert">error al prestar</div>';
                        }

                    }
                    ?>
</form>
  </content>  
  <script src="../boodstrap/bootstrap.bundle.js"></script>

</body>
</html>