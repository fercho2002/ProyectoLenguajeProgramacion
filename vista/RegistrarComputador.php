<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Equipo</title>
    <link href="../boodstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estiloregistarcomputador.css">
</head>

<body>
  <content>
      <form >
      <a href="principal.php" class="btn btn-success" style="position:absolute; top:20px; right:20px;">volver a inicio</a>
          <div id="diviz" class="divs">
          <div id="diviz" class="divs">
            <div class="divgenerales" id="div1">
              <label class="labelgenerales">Marca</label>
              <input  id="input1" class="inputgenerales" type="text"  placeholder="marca" >
          </div>
          <div class="divgenerales" id="div2">
              <label class="labelgenerales">Serial</label>
              <input  id="input2" class="inputgenerales" type="text"  placeholder="serial" >
          </div>
          <div class="divgenerales" id="div3">
              <label class="labelgenerales">Modelo</label>
              <input  id="input3" class="inputgenerales" type="text"  placeholder="modelo" >
          </div>
          </div>
         
          <div id="divab">
            <div class="divfooter">
             <label class="todoab">Id bibliotecario : </label>
             <input  class="todoab" type="text" id="observacion" disabled class="inputs">
            </div>
            <div class="divfooter">
             <label class="todoab">estado</label>
             <input  class="todoab"  type="text" id="estado" class="inputs">
            </div>
            <div class="divfooter">
             <label  class="todoab" >Observacion</label>
             <input  class="todoab" type="text" id="observacion" class="inputs"  >
            </div>
            <div >
                <button type="submit" class="btn btn-warning botones "  style="margin: 20px 20px;">Registrar</button>
            </div>
          </div>
          </div>
        </form>
  </content>  
  <script src="../boodstrap/bootstrap.bundle.js"></script>
</body>
</html>