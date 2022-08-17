<?php 

require_once "ConexionDB.php";

 class ResolucionM extends ConexionDB{

    //Crear Oficios

 	static public function CrearResolucionM($tablaDB,$datosC){

 		$pdo = ConexionDB::cDB()->prepare("INSERT INTO $tablaDB (fecha, doc_url,id_tipo_resolucion,numero_res,dni,nombres,paterno,materno) VALUES (:fecha, :doc_url,:id_tipo_resolucion,:numero_res,:dni,:nombres,:paterno,:materno)");


 		$pdo->bindParam(":fecha",$datosC["fecha"],PDO::PARAM_STR);
 		$pdo->bindParam(":doc_url",$datosC["doc_url"],PDO::PARAM_STR);
        $pdo->bindParam(":id_tipo_resolucion",$datosC["id_tipo_resolucion"],PDO::PARAM_INT);
        $pdo->bindParam(":numero_res",$datosC["numero_res"],PDO::PARAM_STR);
        $pdo->bindParam(":dni",$datosC["dni"],PDO::PARAM_STR);
        $pdo->bindParam(":nombres",$datosC["nombres"],PDO::PARAM_STR);
        $pdo->bindParam(":paterno",$datosC["paterno"],PDO::PARAM_STR);
        $pdo->bindParam(":materno",$datosC["materno"],PDO::PARAM_STR);


 			if ($pdo->execute()) {
 			
 			return true;
 		}else{

 			return false;
 		}

 		$pdo->close();
 	}

 	//ver comunicados
    // ver usuarios

    static public function VerResolucionM($tablaDB){

        $pdo = ConexionDB::cDB()->prepare("SELECT * FROM $tablaDB join tipo_resolucion on resolucion.id_tipo_resolucion = tipo_resolucion.id_tipo_resolucion");

        $pdo->execute();

        return $pdo->fetchAll();

        $pdo->close;
    }


 }


 ?>