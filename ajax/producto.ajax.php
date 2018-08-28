<?php 

	require_once "../controllers/producto.controller.php";
	require_once "../models/producto.model.php";

class AjaxProducto{

		public $formCatProduct;

		public function ajaxAgregarCategoria(){
			$respuesta = ControllerProducto::ctrAgregarCategoria($nombre);
		}




		public function ajaxMostrarCategoria(){
			$respuesta = ControllerProducto::ctrMostrarCategoria();
			echo json_encode($respuesta);
		}


		public $idCategoria;

		public function ajaxEliminarCategoria(){
			$valor = $this->idCategoria;
			$respuesta = ControllerProducto::ctrEliminarCategoria($valor);
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