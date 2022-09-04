<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="shortcut icon" href="./views/public/img/login-icon-png">
    <link href="https://fonts.googleapis.com/css2?family=Mukta&family=Roboto+Mono:wght@100;200&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./views/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./views/public/css/estilos.css">
    <link rel="stylesheet" href="./views/public/css/sliderbar.css">
    
</head>
<body class="body">
    <div class="container h-100">
        <h3 class="text-center text-white pt-4 text-roboto">SISTEMA DE GESTOR DE RESOLUCIONES DIRECTORALES - UGEL YUNGUYO</h3>
        <div class="row justify-content-center align-items-center h-75">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
                <?php
                        $ingreso = new UsuariosC();
                        $ingreso-> IngresoUsuariosC();
                    ?>
                <form class="bg-login p-4 rounded-3" method="post">
                    <h4 class="text-center text-white pb-3 text-roboto">Iniciar Sesion</h4>
                    <div class="form-group mb-4">
                      <input type="text" class="form-control login-input" name="usuario-ing" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuario" autocomplete="off" >
                    </div>
                    <div class="form-group mb-4">
                      <input type="password" class="form-control login-input" name="clave-ing" id="exampleInputPassword1" placeholder="Contraseña"  >
                    </div>
                    <button type="submit" class=" form-control btn btn-lite">Ingresar</button>
                    
                  </form>
            </div>
        </div>
    </div>
</body>
</html>