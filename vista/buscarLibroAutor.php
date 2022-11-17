<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar por Autor</title>
    <link href="../boodstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/generales.css">
</head>
<body>

<content>

      <form id="generaltablasEx" action="../controlador/controladorBuscarLibro.php" method="post">	 	
      <?php 
          session_start();
          @$libro = unserialize($_GET['libro']);
          @$autor = $_GET['autor'];

          include_once("../modelo/Conectar.php");
          $conexion = new Conectar();
          $conexionbd = $conexion->conectarbd();
          

      ?>
      <a href="principal.php" class="btn btn-success" style="position:absolute; top:20px; right:20px;">volver a inicio</a>
          <div id="diviz" class="divs">
          <div class="divgenerales" id="div1">
              <label class="labelgeneralesultimo">Autor: </label>
              <select name="fentrada" >
                <option>Seleccione</option>
            <?php 
                $dis = "disponible";
                $resultado = mysqli_query($conexionbd,"SELECT DISTINCT autor FROM libros WHERE actualmente = '$dis' ORDER BY autor ASC ");
                $res = $resultado->fetch_all();
                foreach ($res as $re){
                  $autor = $re[0];
                  
            ?>
            <option value="<?php echo $autor; ?>" ><?php echo $autor; ?></option>

            <?php
                }
            ?>
          </select>
          </div>
          <div >
                <button type="submit" class="btn btn-warning botones " name="fboton" value="autor" style="margin: 10px 20px;">Buscar</button>
          </div >
          <label class="labelgeneralestablas  ">Libros Por Autor</label>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Id Libro</th>
      <th scope="col">Nombre Libro</th>
      <th scope="col">Genero</th>
      <th scope="col">Estado</th>
      <th scope="col">Observacion</th>
      
      
    </tr>
  </thead>
  <tbody>
      <?php  
     
            if(!empty ($libro)){
                foreach($libro as $lis){
                 
                

                

                  ?>
          
    <tr>
     
      <td><?php echo $lis[0] ?></td>
      <td><?php echo $lis[1] ?></td>
      <td><?php echo $lis[2] ?></td>
      <td><?php echo $lis[3] ?></td>
      <td><?php echo $lis[4] ?></td>
    </tr>
    
    <?php   } }?>
  </tbody>
</table>  

          </div>

          
</form>
  </content>  
  <script src="../boodstrap/bootstrap.bundle.js"></script>

</body>
</html>
