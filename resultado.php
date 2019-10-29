<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php
    include ("conexion.php");
    $usuario = $_POST["usuario"];
    $password = hash("whirlpool" , $_POST["password"]);

    $statement = "SELECT nombre, contrasena 
                              FROM usuarios 
                              WHERE contrasena = '$password' 
                              AND nombre = '$usuario' ";

    $resultado = $conexionBD->query($statement);
    //var_dump($resultado);

    if($resultado->num_rows > 0) {
        echo "<h1 class=\"text-success\">Bienvenid@ " . $usuario . "</h1>";
    }
    else {
        echo "<h1 class=\"text-danger\">Usuario o contraseña incorrectos!</h1>";
    }

    ?>
</body>
</html>