<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros Disponibles </title>
    <link href="../boodstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/generales.css">
</head>
<body>
<?php   
        include_once("../modelo/mdTablas.php");
        $modelo = new mdTablas();
        $tab = $modelo->tablaLibrosDisponibles();
      ?>
<content>

      <form id="generaltablas" >	 	
      
      <a href="principal.php" class="btn btn-success" style="position:absolute; top:20px; right:20px;">volver a inicio</a>
          <div id="diviz" class="divs">
            <div class="divgenerales" id="div1">
              <label class="labelgeneralestablas  ">Libros Disponibles</label>
            </div>
            
            <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Id Libro</th>
      <th scope="col">Nombre</th>
      <th scope="col">Genero</th>
      <th scope="col">Autor</th>
    </tr>
  </thead>
  <tbody>
      <?php  
            while($resultado=mysqli_fetch_array($tab)){
      ?>
    <tr>
     
      <td><?php echo $resultado['idlibro'] ?></td>
      <td><?php echo $resultado['nombrelibro'] ?></td>
      <td><?php echo $resultado['genero'] ?></td>
      <td><?php echo $resultado['autor'] ?></td>
    </tr>
    <?php } ?>
   
  </tbody>
</table>  
          </div>

          
</form>
  </content>  
  <script src="../boodstrap/bootstrap.bundle.js"></script>

</body>
</html>