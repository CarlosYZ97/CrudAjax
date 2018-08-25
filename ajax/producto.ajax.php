<?php 

	require_once "../controllers/producto.controller.php";
	require_once "../models/producto.model.php";

class AjaxProducto{

		public $formCatProduct;

		public function ajaxAgregarCategoria(){
			$nombre = $this->formCatProduct;
			$respuesta = ControllerProducto::ctrAgregarCategoria($nombre);
			echo  $respuesta;
		}

}



if(isset($_POST["nuevoCategoria"])){

	$agregarCat = new AjaxProducto();
	$agregarCat -> formCatProduct = $_POST["nuevoCategoria"];
	$agregarCat -> ajaxAgregarCategoria();

}