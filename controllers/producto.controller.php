<?php 

	class ControllerProducto{

		/*=========================================
		=            Agregar Categoria            =
		=========================================*/
		

		static public  function ctrAgregarCategoria($datosAjax){


			if(isset($datosAjax)){

				$tabla = "categoria";
				$datos = array("nombre" => $datosAjax);

				$respuesta = ModelProductos::mdlAgregarCategoria($tabla,$datos);
				
				if($respuesta=="ok"){
				 	return "ok";
				}

			}
			
		}

		static public function ctrMostrarCategoria(){

			$tabla = "categoria";
			$respuesta = ModelProductos::mdlMostrarCategoria($tabla);
			return $respuesta;

		}

		static public function ctrEliminarCategoria($valor){
			$tabla = "categoria";
			$respuesta = ModelProductos::mdlEliminarCategoria($tabla,$valor);
			return $respuesta;

		}
		
		



	}