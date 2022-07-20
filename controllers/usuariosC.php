<?php
	class UsuariosC{
		public function IngresoUsuariosC(){
			if(isset($_POST["usuario-ing"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario-ing"]) && preg_match('/^[a-zA-Z0-9]+$/',$_POST["clave-ing"])){

				$datosC = array("usuario"=>$_POST["usuario-ing"],"clave"=>$_POST["clave-ing"]);

				$tablaDB = "usuarios";

				$respuesta = UsuariosM::IngresarUsuariosM($datosC, $tablaDB);

				if($respuesta["usuario"]==$_POST["usuario-ing"] && $respuesta["contraseña"]==$_POST["clave-ing"]  ){

					$_SESSION["Ingreso"]=true;

					$_SESSION["id"]=$respuesta["id"];
					$_SESSION["usuario"]=$respuesta["usuario"];
					$_SESSION["clave"]=$respuesta["clave"];


					echo '<script> 

					window.location= "inicio"; 


					</script>';
				}else{
					echo '<div style="text-align: center;padding-top:8px;"><b style="color:#BC1817;">ERROR AL INGRESAR</b></div>';
				}
			}
		}
		}
	}
?>