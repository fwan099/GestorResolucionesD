<?php 

 class ResolucionC{

 	//crear resolucion
 	public function CrearResolucionC(){

 		if(isset($_POST["fechaN"])){

 			$rutaPdf="";

 			if(isset($_FILES["documentoN"]["tmp_name"]) && !empty($_FILES["documentoN"]["tmp_name"])){

 				if($_FILES["documentoN"]["type"] == "application/pdf"){

 					$nombre = mt_rand(10,999);
 					$rutaPdf = "views/public/docs/O".$nombre.".pdf";
 					$documento = $_FILES["documentoN"]["tmp_name"];

 					move_uploaded_file($documento,$rutaPdf);


 				}
 			}

 			$tablaDB = "resolucion";

 			$datosC = array("fecha"=>$_POST["fechaN"],"doc_url"=>$rutaPdf,"id_tipo_resolucion"=>$_POST["motivoN"],"numero_res"=>$_POST["numeroN"],"dni"=>$_POST["dniN"],"nombres"=>$_POST["nombresN"],"paterno"=>$_POST["paternoN"],"materno"=>$_POST["maternoN"]);

 			$respuesta = ResolucionM::CrearResolucionM($tablaDB,$datosC);

 			if($respuesta == true){

				echo ' <script>

					window.location = "cargarRes";

				</script>';
			}else{

				echo 'ERROR AL CREAR RESOLUCION';
			}

 		}
 	}


	public function VerResolucionC(){
		$tablaDB = "resolucion";
		$respuesta = ResolucionM::VerResolucionM($tablaDB);

		foreach($respuesta as $key => $value){
			echo '<tr>
	                <td>'.($key+1).'</td>
	                <td>'.($value["numero_res"]).'</td>
	                <td>'.($value["detalle"]).'</td>
	                <td>'.($value["dni"]).'</td>
	                <td>'.($value["fecha"]).'</td>
	                <td>'.($value["doc_url"]).'</td>';
	                
	            echo ' 
	                <td>
	                  <div class="btn-group">
                		<button class="btn btn-success EditarU" Uid="'.($value["id_resolucion"]).'"><i class="fas fa-pencil-alt" data-bs-toggle="modal" data-bs-target="#EditarU"></i></button>
               			<button class="btn btn-danger BorrarU" Uid="'.($value["id_resolucion"]).'" ><i class="fa-solid fa-trash-can"></i></button>
            		  </div>
	                </td>
              </tr>';
		}
	}







 }

 ?>