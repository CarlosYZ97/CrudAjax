/* Script para cargar un html externo en un contendor div */
$(document).ready(function(){
	$("#tipoVistaPS").change(function(){
		if($("#tipoVistaPS option:selected").val() === "1"){
			$.post("views/modules/productoStockVC.php",function(htmlexterno){
				$("#contendorProductoStock").html(htmlexterno);
			});
		}else if($("#tipoVistaPS option:selected").val() === "2"){
			$.post("views/modules/productoStockVL.php",function(htmlexterno){
				$("#contendorProductoStock").html(htmlexterno);
			});
		}
	});

	$("#tipoVistaPP").change(function(){
		if($("#tipoVistaPP option:selected").val() === "1"){
			$.post("views/modules/productoPersonalizadoVC.php",function(htmlexterno){
				$("#contendorProductoPersonalizado").html(htmlexterno);
			});
		}else if($("#tipoVistaPP option:selected").val() === "2"){
			$.post("views/modules/productoPersonalizadoVL.php",function(htmlexterno){
				$("#contendorProductoPersonalizado").html(htmlexterno);
			});
		}
	});
});



/*==============================================
=            Agregar Categoria Ajax            =
==============================================*/




$('#AgregarCategoriaProducto').submit(function(e){

	e.preventDefault();

	var datos = $(this).serializeArray();
	console.log("form",datos);

	 $.ajax({
	    url:"ajax/producto.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    // dataType: "json",
	    success:function(respuesta){
	    	console.log("respuesta",respuesta);
	    	// swal({
						// 		type :"success",
						// 		title : "¡La Categoria ha sido guardado correctamente",
						// 		showConfirmButton : true,
						// 		confirmButtonText : "Cerrar",
						// 		closeOnConfirm : false
						// 	}).then((result)=>{
						// 			if(result.value){
						// 				window.location = "producto-categoria";
						// 			}
						// 		});	
	    }

	})
})