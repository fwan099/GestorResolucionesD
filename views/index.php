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
    <link rel="stylesheet" href="./views/public/css/sliderbar.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <?php
        if(isset($_SESSION["Ingreso"]) && $_SESSION["Ingreso"]==true){
            include "modules/cabecera.php";
            include "modules/menu.php";

            if(isset($_GET["url"])){
                if($_GET["url"]=="salir" || $_GET["url"]=="inicio" || $_GET["url"]=="buscarRes" || $_GET["url"]=="ingresarMotivo"|| $_GET["url"]=="cargarRes"|| $_GET["url"]=="usuarios" || $_GET["url"]=="perfil"){
                    include "modules/".$_GET["url"].".php";
                }

            }else{
                include "modules/inicio.php";
            }
        }else{
            include 'modules/ingreso.php';
        }

    ?>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="./views/public/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="./views/public/js/main.js"></script>
<script src="https://kit.fontawesome.com/bd7b24f1e0.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    
</script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="./views/public/js/paginacion.js"></script>

    
</body>
</html>
