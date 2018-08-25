<?php 

	class ControladorPlantilla{


		static public function  ctrPlantilla(){
			include 'views/template.php';
		}

		static public function ctrEnlaces(){
			if(isset($_GET["ruta"])){
				$enlaces = $_GET["ruta"];
			}else{
				$enlaces = "index";
			}

			$respuesta = Enlaces::mdlEnlacesPaginas($enlaces);

			include $respuesta;
		}


		static public function ctrMenu(){


			  if(isset($_GET["ruta"])){

			    $enlaces = $_GET["ruta"];
			    
			  }else{

			  	$enlaces = "venta";
			  }


			  $respuesta = Enlaces::mdlMenuLateral($enlaces);

			  include $respuesta;

		}

	}