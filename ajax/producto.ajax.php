<?php 

	require_once "../controllers/producto.controller.php";
	require_once "../models/producto.model.php";

class AjaxProducto{


		/*=========================================
		=            Agregar Categoria            =
		=========================================*/
				

		public $formCatProduct;

		public function ajaxAgregarCategoria(){
			$nombre = $this->formCatProduct;
			$respuesta = ControllerProducto::ctrAgregarCategoria($nombre);
			echo $respuesta;
		}

		/*=========================================
		=            Mostrar Categoria            =
		=========================================*/
		
		public function ajaxMostrarCategoria(){
			$respuesta = ControllerProducto::ctrMostrarCategoria();
			echo json_encode($respuesta);
			
		}

		/*==========================================
		=            Eliminar Categoria            =
		==========================================*/
		
		public $idCategoria;

		public function ajaxEliminarCategoria(){
			$valor = $this->idCategoria;
			$respuesta = ControllerProducto::ctrEliminarCategoria($valor);
		}

		/*========================================
		=            Buscar Categoría            =
		========================================*/
		public $idCategoriaEditar;
		public function ajaxBuscarCategoria(){
			$item = "codigo";
			$valor = $this->idCategoriaEditar;
			$respuesta = ControllerProducto::ctrBuscarCategoria($item,$valor);
			echo json_encode($respuesta);

		}

		/*========================================
		=            Editar Categoría            =
		========================================*/
		
		
		
		public $EditarCategoria = array();
		public function ajaxEditarCategoria(){
			$item = "codigo";

			$valor = array();
			$valor = $this->EditarCategoria;
			$respuesta = ControllerProducto::ctrEditarCategoria($item,$valor);

			echo $respuesta;


		}

		
		
		
}



if(isset($_POST["nuevoCategoria"])){

	$agregarCat = new AjaxProducto();
	$agregarCat -> formCatProduct = $_POST["nuevoCategoria"];
	$agregarCat -> ajaxAgregarCategoria();

}


if(isset($_POST["cargar"])){
	$mostrarCat = new AjaxProducto();
	$mostrarCat -> ajaxMostrarCategoria();
}


if(isset($_POST["idCategoria"])){
	$eliminarCat = new AjaxProducto();
	$eliminarCat -> idCategoria = $_POST["idCategoria"];
	$eliminarCat -> ajaxEliminarCategoria();
}


if(isset($_POST["idCategoriaEditar"])){

	$buscarCat = new AjaxProducto();
	$buscarCat -> idCategoriaEditar = $_POST["idCategoriaEditar"];
	$buscarCat -> ajaxBuscarCategoria();

}


if(isset($_POST["editarCategoria"])){


	$editarCat = new AjaxProducto();
	$editarCat -> EditarCategoria = array("nombreCategoria" => $_POST["editarCategoria"],"id"=> $_POST["editarIdCategoria"]);
	$editarCat -> ajaxEditarCategoria();

}