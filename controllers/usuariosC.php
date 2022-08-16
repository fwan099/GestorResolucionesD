<?php
	class UsuariosC{
		public function IngresoUsuariosC(){
			if(isset($_POST["usuario-ing"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario-ing"]) && preg_match('/^[a-zA-Z0-9]+$/',$_POST["clave-ing"])){

				$datosC = array("usuario"=>$_POST["usuario-ing"],"clave"=>$_POST["clave-ing"]);

				$tablaDB = "usuario";

				$respuesta = UsuariosM::IngresarUsuariosM($datosC, $tablaDB);
				if(is_array($respuesta)){
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
			}else{
				echo '<div class="alert alert-danger text-center" role="alert">
  							Ups! Usuario o contraseña incorrecta
						</div>';
			}

				
				
			}
		}
		}

		//Ver usuarios
	public function VerUsuariosC(){
		$tablaDB = "usuario";
		$respuesta = UsuariosM::VerUsuariosM($tablaDB);

		foreach($respuesta as $key => $value){
			echo '<tr>
	                <td>'.($key+1).'</td>
	                <td>'.($value["usuario"]).'</td>
	                <td>'.($value["clave"]).'</td>';
	                
	            echo ' <td>'.($value["rol"]).'</td>
	                <td>
	                  <div class="btn-group">
                		<button class="btn btn-success" ><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#EditarU"></i></button>
               			<button class="btn btn-danger BorrarU" Uid="'.($value["id_usuario"]).'" ><i class="fa-solid fa-trash-can"></i></button>
            		  </div>
	                </td>
              </tr>';
		}
	}
		// Crear Usuarios

	public function CrearUsuariosC(){

		if(isset($_POST["usuarioN"])){

			$tablaDB = "usuario";

			$datosC = array("usuario"=>$_POST["usuarioN"],"clave"=>$_POST["claveN"],"rol"=>$_POST["rolN"]);

			$respuesta = UsuariosM::CrearUsuariosM($tablaDB,$datosC);

			if($respuesta==true){

				echo '<script> 

					window.location= "usuarios"; 


					</script>';
			}else{
				echo 'ERROR AL CREAR USUARIO';
			}
		}
	}

	//Borrar usuarios
	public function BorrarUsuariosC(){

		if(isset($_GET["Uid"])){
			$tablaDB = "usuario";
			$datosC = $_GET["Uid"];


			$respuesta = UsuariosM::BorrarUsuariosM($tablaDB,$datosC);


			if($respuesta==true){

				echo '<script> 

					window.location= "usuarios"; 


					</script>';
			}else{
				echo 'ERROR AL BORRAR USUARIO';
			}
		}
	}
	}
?>