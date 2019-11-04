<?php
session_start();

$sesion = $_SESSION["usuario"];

if(!isset($sesion)) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIP</title>
    <link rel="stylesheet" href="css/main.css" />
    <style>
        img {
            width: 50%;
        }
    </style>
</head>
<body>
    <section class="container-fluid">
        <section class="row text-center">
            <div class="col-md-12">
                <h3>Selecciona el paquete para la cena</h3>
            </div>
            <div class="col-md-4">
                <h4>Básico</h4>
                <img src="assets/img/platillo1.png" alt="platillo1">
                <h4>$100</h4>
            </div>
            <div class="col-md-4">
                <h4>Medio</h4>
                <img src="assets/img/platillo2.png" alt="patillo2">
                <h4>$500</h4>
            </div>
            <div class="col-md-4">
                <h4>Premium</h4>
                <img src="assets/img/platilla3.png" alt="platillo3">
                <h4>$1000</h4>
            </div>
        </section>
    </section>
</body>
</html>
