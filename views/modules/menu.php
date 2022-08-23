<?php
 if($_SESSION["rol"] != "Administrador"){
    echo '

 <style type="text/css">

  .sidebar-menu li:nth-child(9){
    background-color: rgba(100, 100, 100, 5.0);

  }


  .main-menu li:nth-child(3) a{cursor: no-drop !important;display:none;}
  .main-menu li:nth-child(4) a{cursor: no-drop !important;display:none;}
  .main-menu li:nth-child(5) a{cursor: no-drop !important;display:none;}
 
 </style>
    ';

 }

?>
 <div class="contenedor">   
    <nav class="main-menu" id="myDIV" >
                <ul>
                    <li>
                        <a href="inicio">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                Inicio
                            </span>
                        </a>
                      
                    </li>
                    <li>
                        <a href="buscarRes">
                            <i class="fa fa-search fa-2x"></i>
                            <span class="nav-text">
                                Buscar Resolucion
                            </span>
                        </a>
                      
                    </li>
                    <li class="has-subnav">
                        <a href="cargarRes">
                            <i class="fa fa-cloud-upload fa-2x"></i>
                            <span class="nav-text">
                                Subir Resolucion
                            </span>
                        </a>
                        
                    </li>
                    <li class="has-subnav">
                        <a href="ingresarMotivo">
                           <i class="fa fa-thumb-tack fa-2x"></i>
                            <span class="nav-text">
                                Ingresar Motivo
                            </span>
                        </a>
                        
                    </li>
                    <li class="has-subnav">
                        <a href="usuarios">
                           <i class="fa fa-users fa-2x"></i>
                            <span class="nav-text">
                                Usuarios
                            </span>
                        </a>
                       
                    </li>
                    <li>
                        <a href="perfil">
                            <i class="fa fa-user-circle-o fa-2x"></i>
                            <span class="nav-text">
                                Mi Perfil
                            </span>
                        </a>
                    </li>
                  
                </ul>


                <ul class="logout">
                    <li>
                       <a href="salir">
                             <i class="fa fa-power-off fa-2x"></i>
                            <span class="nav-text">
                                Salir
                            </span>
                        </a>
                    </li>  
                </ul>
            </nav>
