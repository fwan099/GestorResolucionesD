<?php
	class UsuariosC{
		public function IngresoUsuariosC(){
			if(isset($_POST["usuario-ing"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario-ing"]) && preg_match('/^[a-zA-Z0-9]+$/',$_POST["clave-ing"])){

				$datosC = array("usuario"=>$_POST["usuario-ing"],"clave"=>$_POST["clave-ing"]);

				$tablaDB = "usuario";

				$respuesta = UsuariosM::IngresarUsuariosM($datosC, $tablaDB);

				if($respuesta["usuario"]==$_POST["usuario-ing"] && $respuesta["clave"]==$_POST["clave-ing"]  ){

					$_SESSION["Ingreso"]=true;

					$_SESSION["id_usuario"]=$respuesta["id_usuario"];
					$_SESSION["usuario"]=$respuesta["usuario"];
					$_SESSION["clave"]=$respuesta["clave"];
					$_SESSION["rol"]=$respuesta["rol"];


					echo '<script> 

					window.location= "inicio"; 


					</script>';
				}else{
					echo '<div class="alert alert-danger text-center" role="alert">
  							Ups! Usuario o contraseña incorrecta
						</div>';
				}
				
			}
		}
		}
	}
?>