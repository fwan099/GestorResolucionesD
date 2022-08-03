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
}
?>