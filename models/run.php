<?php 

require_once "server_process_2.php";
require_once "producto.model.php";

// Create instance of TableData class
// $table_data = TableData::get('categoria', 'codigo', array('codigo', 'nombre'));
$table_data = ModelProductos::mdlMostrarCategoria('categoria','codigo',array('codigo','nombre'));
echo json_encode($table_data);
