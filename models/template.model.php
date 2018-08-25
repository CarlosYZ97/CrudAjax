<?php 

	class Enlaces{

		public function mdlEnlacesPaginas ($enlaces){

			  if(file_exists("views/modules/".$enlaces.".php")){
        			$module = "views/modules/".$enlaces.".php";
     		 	}else if($enlaces =="index"){
     		 		$module = "views/modules/inicio.php";
     		 	}else{
        			$module = "views/modules/404.php";
      			}
      		return $module;
		}


		public function mdlMenuLateral($enlaces){

			$menu = "views/modules/menu-lateral-venta.php";

			$menus = array("empleado","compra","venta","producto","proceso","transporte","seguimiento");

			foreach ($menus as $key) {
			      if (preg_match("/".$key."/i",$enlaces)) {
			        $menu = "views/modules/menu-lateral-".$key.".php";
			      } 
			}
			return $menu;
		}
	}