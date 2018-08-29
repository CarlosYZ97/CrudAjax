<?php 

	class Conexion{

		public function conectar(){

			$link = new PDO("mysql:host=158.69.248.110:3306;dbname=fhxfyojv_pruebajax","fhxfyojv_derpage","9cRVp^uP(l5K");
			$link -> exec("set names utf8");
			// echo var_dump($link);
			return $link;

		}


	}



	// $db = Conexion::conectar();