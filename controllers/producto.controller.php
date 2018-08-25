<?php 

	class ControllerProducto{

		/*=========================================
		=            Agregar Categoria            =
		=========================================*/
		

		static public  function ctrAgregarCategoria($datosForm){


			if(isset($datosForm)){

				$tabla = "categoria";
				$datos = array("nombre" => $datosForm);

				$respuesta = ModelProductos::mdlAgregarCategoria($tabla,$datos);
				
				if($respuesta=="ok"){
				 	return  'se registró';
				}


			}
			
		}

		static public function ctrMostrarCategoria(){

			$tabla = "categoria";
			$respuesta = ModelProductos::mdlMostrarCategoria($tabla);
			return $respuesta;

		}
		
		



	}