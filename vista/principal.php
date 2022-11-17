<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>
    <link href="../boodstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/hoja.css" >
</head>
<body>
  <?php 
  session_start();
  @$nom = $_SESSION["nombre"];
  ?>
<nav class="navbar navbar-expand-lg navbar-light fondodegradado " >
      <form action="cerrarsesion.php" method="post">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Registrar
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="RegistrarLibro.php">Registar Libro</a></li>
                        <li><a class="dropdown-item" href="RegistrarComputador.php">Registar Equipo</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown" >
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Prestar
                      </a>
                      <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="prestarLibro.php">Prestar Libro</a></li>
                        <li><a class="dropdown-item" href="prestarEquipo.php">Prestar Equipo</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown" >
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Devolver
                      </a>
                      <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="devolverLibro.php">Devolver Libro</a></li>
                        <li><a class="dropdown-item" href="devolverComputador.php">Devolver Equipo</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown" >
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tablas
                      </a>
                      <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="tbLibrosDisponibles.php">Tabla De Libros Disponibles</a></li>
                        <li><a class="dropdown-item" href="tbLibrosPrestados.php">Tabla De Libros Prestados</a></li>
                        <li><a class="dropdown-item" href="tbEquiposDisponibles.php">Tabla De equipos Disponibles</a></li>
                        <li><a class="dropdown-item" href="tbEquiposPrestados.php">Tabla De Equipos Prestados</a></li>
                        <li><a class="dropdown-item" href="tbUsuarios.php">Tabla De Usuarios</a></li>

                      </ul>
                    </li>
                    <li class="nav-item dropdown" >
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Buscar
                      </a>
                      <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="buscarLibroGenero.php">Buscar Libro por Genero</a></li>
                        <li><a class="dropdown-item" href="buscarLibroAutor.php ">Buscar Libro por Autor</a></li>
                      </ul>
                    </li>
                      
                    
                    </li>
                    
                  </ul>
                  
                  <button class="btn btn-outline-success" type="submit"  name="fbtn" value="cerrar">Cerrar Seccion</button>
               

                </div>
              </div>
            </nav>
          
          <nav id="navTodo">
          <div id="fondo"><img id="im" src="../imagenes/desc5.jpg">
          </div>
        </form>
        <div class="flotante">
          <img class="ima" src="../imagenes/icono.png">
        <label class="labels" ><?php echo $nom ?></label>
</div>
  </nav>
  <script src="../boodstrap/bootstrap.bundle.js"></script>  
</body>
</html>