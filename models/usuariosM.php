<?php
require_once "ConexionDB.php";
class UsuariosM extends ConexionDB{
	static public function IngresarUsuariosM($datosC, $tablaDB){
		$pdo = ConexionDB::cDB()->prepare("SELECT usuario, clave FROM $tablaDB WHERE usuario=:usuario");

		$pdo ->bindParam(":usuario",$datosC["usuario"],PDO::PARAM_STR);

		$pdo->execute();

		return $pdo ->fetch();

		$pdo->close();
	}
}
?>