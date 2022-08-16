<?php
require_once "ConexionDB.php";
class UsuariosM extends ConexionDB{
	static public function IngresarUsuariosM($datosC, $tablaDB){
		$pdo = ConexionDB::cDB()->prepare("SELECT id_usuario, usuario, clave, rol FROM $tablaDB WHERE usuario=:usuario");

		$pdo ->bindParam(":usuario",$datosC["usuario"],PDO::PARAM_STR);

		$pdo->execute();

		return $pdo ->fetch();

		$pdo->close();
	}

	// ver usuarios

	static public function VerUsuariosM($tablaDB){

		$pdo = ConexionDB::cDB()->prepare("SELECT id_usuario, usuario, clave, rol FROM $tablaDB");

		$pdo->execute();

		return $pdo->fetchAll();

		$pdo->close;
	}

	//Crear Usuarios

	static public function CrearUsuariosM($tablaDB,$datosC){

		$pdo = ConexionDB::cDB()->prepare("INSERT INTO $tablaDB (usuario,clave,rol) VALUES (:usuario, :clave, :rol)");


		$pdo->bindParam(":usuario",$datosC["usuario"],PDO::PARAM_STR);
		$pdo->bindParam(":clave",$datosC["clave"],PDO::PARAM_STR);
		$pdo->bindParam(":rol",$datosC["rol"],PDO::PARAM_STR);

		if($pdo->execute()){
			return true;
		}else{
			return false;
		}

		$pdo->close();
	}


	//borrar usuarios

	static public function BorrarUsuariosM($tablaDB,$datosC){

		$pdo = ConexionDB::cDB()->prepare("DELETE FROM $tablaDB WHERE id_usuario = :id_usuario");

		$pdo ->bindParam(":id_usuario",$datosC,PDO::PARAM_INT);

		if($pdo->execute()){
			return true;
		}else{
			return false;
		}

		$pdo->close();

	}

	
}
?>