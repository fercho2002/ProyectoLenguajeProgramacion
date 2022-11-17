<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros Prestados </title>
    <link href="../boodstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/generales.css">
</head>
<body>
<?php   
        include_once("../modelo/mdTablas.php");
        $modelo = new mdTablas();
        $tab = $modelo->tablaLibrosPrestados();
      ?>
<content>

      <form id="generaltablas" >	 	
      
      <a href="principal.php" class="btn btn-success" style="position:absolute; top:20px; right:20px;">volver a inicio</a>
          <div id="diviz" class="divs">
            <div class="divgenerales" id="div1">
              <label class="labelgeneralestablas  ">Libros Prestados</label>
            </div>
            <div >
                <button type="submit" class="btn btn-warning botones " name="fboton" value="buscar" style="margin: 10px 20px;" onclick="document.location.reload();">Actualizar</button>
          </div >
            <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Id Libro</th>
      <th scope="col">Nombre Libro</th>
      <th scope="col">ID Usuario</th>
      <th scope="col">Fecha De Prestamo</th>
      <th scope="col">Fecha De Entregado</th>
    </tr>
  </thead>
  <tbody>
      <?php  
            while($resultado=mysqli_fetch_array($tab)){
      ?>
    <tr>
     
      <td><?php echo $resultado['idlibro'] ?></td>
      <td><?php echo $resultado['nombrelibro'] ?></td>
      <td><?php echo $resultado['idusuariopre'] ?></td>
      <td><?php echo $resultado['fechadeprestamo'] ?></td>
      <td><?php echo $resultado['fechadeentregado'] ?></td>
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