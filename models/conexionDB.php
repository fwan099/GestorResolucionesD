<?php 
class ConexionDB{

	public function cDB(){
		$db = new PDO("mysql:host=localhost;dbname=ugel_rd","root","");

		$db->exec("set names utf8");

		return $db;
	}
}

 ?>