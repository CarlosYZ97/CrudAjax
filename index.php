<?php 

	require_once "controllers/template.controller.php";
	require_once "models/template.model.php";
	require_once "controllers/producto.controller.php";
	require_once "models/producto.model.php";


	$plantilla = new ControladorPlantilla();

	$plantilla -> ctrPlantilla();