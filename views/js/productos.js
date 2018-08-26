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
	var nomCategoria = $("#nuevoCategoria").val();
	var datos  = new  FormData($("#AgregarCategoriaProducto")[0]);

	 $.ajax({
	    url:"ajax/producto.ajax.php",
	    type:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    // dataType: "json",
	    success:function(respuesta){
	    	 var listarCategorias=$.parseJSON(respuesta);
	    	console.log(listarCategorias);
            var tabla= $('#tablaCategoria').DataTable();
            tabla.clear().draw();

            for(var i=0; i<listarCategorias.length; i++){
            	tabla.row.add( [ 
                    listarCategorias[i].codigo,
                    listarCategorias[i].nombre,
                    '<div class="btn-group"><button class="btn btn-warning" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fa fa-pencil"></i></button> </div>',
                    '<div class="btn-group"><button class="btn btn-danger" ><i class="fa fa-times"></i></button></div> '
                ] ).draw().node();
            }
            $('#modalAgregarCategoria').modal('hide');
	    		swal({
								type :"success",
								title : "¡La Categoria ha sido guardado correctamente",
								showConfirmButton : true,
								confirmButtonText : "Cerrar",
								closeOnConfirm : false
							}).then((result)=>{
									
								});	
	    	
	    }

	})
})