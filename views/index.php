<?php 
session_start();

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link href="https://fonts.googleapis.com/css2?family=Mukta&family=Roboto+Mono:wght@100;200&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./views/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./views/public/css/estilos.css"> 
</head>
<body>
    <?php
        if(isset($_SESSION["Ingreso"]) && $_SESSION["Ingreso"]==true){
            include "modules/cabecera.php";
            include "modules/menu.php";

            if(isset($_GET["url"])){
                if($_GET["url"]=="salir"){
                    include "modules/".$_GET["url"].".php";
                }

            }else{
                include "modules/inicio.php";
            }
        }else{
            include 'modules/ingreso.php';
        }

    ?>




<script type="text/javascript" src="./views/public/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="./views/public/js/main.js"></script>
<script src="https://kit.fontawesome.com/bd7b24f1e0.js" crossorigin="anonymous"></script>
    
</body>
</html>
