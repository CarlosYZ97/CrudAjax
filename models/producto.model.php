<?php 

	require_once 'conexion.php';
	class ModelProductos{

		/*=========================================
		=            Agregar Categoría            =
		=========================================*/


		static public function mdlAgregarCategoria($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("insert into $tabla (nombre) values (:nombre)");
			$stmt -> bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);

			if($stmt -> execute()){
				return "ok";
			}else{
				return "error";
			}

			$stmt -> close();
			$stmt = null;



		}

		static public function mdlMostrarCategoria($tabla){

			$stmt = Conexion::conectar()->prepare("select * from $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();
			$stmt-> close();
			$stmt = null;

		}

	}

	
	
	
