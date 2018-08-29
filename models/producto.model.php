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


		static public function mdlBuscarCategoria($tabla,$item,$dato){

			$stmt = Conexion::conectar()->prepare("select * from $tabla where $item = :item ");
			$stmt -> bindParam(":item", $dato,PDO::PARAM_INT);
			$stmt->execute();
			return $stmt -> fetch();

			$stmt->close();
			$stmt = null;

		}


		static public function mdlEditarCategoria($tabla,$item,$datos){
			$stmt = Conexion::conectar()->prepare("update $tabla set nombre = :nombre where codigo = :codigo");
			$stmt -> bindParam("nombre",$datos["nombreCategoria"],PDO::PARAM_STR);
			$stmt -> bindParam("codigo",$datos["id"],PDO::PARAM_INT);
			if($stmt->execute()){
				return "ok";
			}else{
				return "error";
			}

			$stmt-> close();
			$stmt = null;

		}

		static public function mdlMostrarCategoria($tabla){

			$query = '';
			$output = array();
			$query .= "SELECT * FROM $tabla ";
			if(isset($_POST["search"]["value"]))
			{
				$query .= 'WHERE codigo LIKE "%'.$_POST["search"]["value"].'%" ';
				$query .= 'OR nombre LIKE "%'.$_POST["search"]["value"].'%" ';
			}
			if(isset($_POST["order"]))
			{
				$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
			}
			else
			{
				$query .= 'ORDER BY codigo ASC ';
			}
			if($_POST["length"] != -1)
			{
				$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
			}
			$statement = Conexion::conectar()->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			$data = array();
			$filtered_rows = $statement->rowCount();
			foreach($result as $row)
			{

				$sub_array = array();
				// $sub_array[] = $image;
				$sub_array[] = $row["codigo"];
				$sub_array[] = $row["nombre"];
				$sub_array[] = '<button class="btn btn-warning update" data-toggle="modal" data-target="#modalEditarCategoria" id="'.$row["codigo"].'"><i class="fa fa-pencil"></i></button> ';
				$sub_array[] = '<button class="btn btn-danger delete" id="'.$row["codigo"].'" ><i class="fa fa-times"></i></button>';
				$data[] = $sub_array;
			}


				$statement2 = Conexion::conectar()->prepare("SELECT * FROM $tabla");
				$statement2->execute();
				$result2 = $statement->fetchAll();
				$datosss = $statement2->rowCount();
			$output = array(
				"draw"				=>	intval($_POST["draw"]),
				"recordsTotal"		=> 	$filtered_rows,
				"recordsFiltered"	=>	$datosss,
				"data"				=>	$data
			);
			return $output;

		}


		static function mdlEliminarCategoria($tabla, $dato){
			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla where codigo = :codigo");
			$stmt -> bindParam(":codigo",$dato,PDO::PARAM_INT);
			if($stmt -> execute()){
				return "ok";
			}else{
				return "error";
			}

			$stmt -> close();
			$stmt  = null;
		}

	}

	
	
	
