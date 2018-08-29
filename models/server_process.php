<?php
require_once "conexion.php";
$query = '';
$output = array();
$query .= "SELECT * FROM categoria ";
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
	$query .= 'ORDER BY codigo DESC ';
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
	$sub_array[] = '<button class="btn btn-warning" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fa fa-pencil"></i></button> ';
	$sub_array[] = '<button class="btn btn-danger" ><i class="fa fa-times"></i></button>';
	$data[] = $sub_array;
}


	$statement2 = Conexion::conectar()->prepare("SELECT * FROM categoria");
	$statement2->execute();
	$result2 = $statement->fetchAll();
	$datosss = $statement2->rowCount();
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	$datosss,
	"data"				=>	$data
);
echo json_encode($output);
?>