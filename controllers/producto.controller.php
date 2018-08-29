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
				}else{
					return "error";
				}

			}
			
		}

		/*=========================================
		=            MOSTRAR CATEGORIA            =
		=========================================*/
		
		
		
		static public function ctrMostrarCategoria(){

			$tabla = "categoria";
			$respuesta = ModelProductos::mdlMostrarCategoria($tabla);
			return $respuesta;

		}

		/*==========================================
		=            ELIMINAR CATEGORIA            =
		==========================================*/
		
		
		
		static public function ctrEliminarCategoria($valor){
			$tabla = "categoria";
			$respuesta = ModelProductos::mdlEliminarCategoria($tabla,$valor);
			return $respuesta;

		}

		/*========================================
		=            BUSCAR CATEGORIA            =
		========================================*/
		
		
		
		static public function ctrBuscarCategoria($item,$valor){
			$tabla = "categoria";
			$respuesta = ModelProductos::mdlBuscarCategoria($tabla,$item,$valor);
			return $respuesta;
		}

		/*========================================
		=            Editar CATEGORIA            =
		========================================*/
		
		
		
		static public function ctrEditarCategoria($item,$valor){
			$tabla = "categoria";
			$respuesta = ModelProductos::mdlEditarCategoria($tabla,$item,$valor);
			return $respuesta;
		}
		
		



	}