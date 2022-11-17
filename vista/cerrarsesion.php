

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();

    $boton = $_POST["fbtn"];
    
        $_SESSION["estado"]="no";
        session_destroy();
        //var_dump($_SESSION["estado"]);
        header("Location:loguin.php");   
    
    
?> 
</body>
</html>