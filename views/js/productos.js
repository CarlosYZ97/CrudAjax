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


/*=============================================
=            Listar Categoria Ajax            =
=============================================*/


$(document).ready(function(){
	var dataTable = $("#tablaCategoria").DataTable({
		  "language": {

			    "sProcessing":     "Procesando...",
			    "sLengthMenu":     "Mostrar _MENU_ registros",
			    "sZeroRecords":    "No se encontraron resultados",
			    "sEmptyTable":     "Ningún dato disponible en esta tabla",
			    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
			    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
			    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			    "sInfoPostFix":    "",
			    "sSearch":         "Buscar:",
			    "sUrl":            "",
			    "sInfoThousands":  ",",
			    "sLoadingRecords": "Cargando...",
			    "oPaginate": {
			    "sFirst":    "Primero",
			    "sLast":     "Último",
			    "sNext":     "Siguiente",
			    "sPrevious": "Anterior"
			    },
			    "oAria": {
			      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			    }

		  	},

		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			data:{"cargar":1},
			url:"ajax/producto.ajax.php",
			// url:"models/server_process.php",
			type:"POST"
		}
	})



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
	    success:function(respuesta){

            $('#modalAgregarCategoria').modal('hide');
            swal({
								type :"success",
								title : "¡La Categoria ha sido guardado correctamente",
								showConfirmButton : true,
								confirmButtonText : "Cerrar",
								closeOnConfirm : false
							}).then((result)=>{
								dataTable.ajax.reload();
									$('#nuevoCategoria').val("");
								});	
            
    	
	    }

	})
})

$(document).on('click','.delete',function(){
	var categorie_id = $(this).attr("id");
	
	var dato = new FormData();
		dato.append("idCategoria",categorie_id);
		$.ajax({
				url:"ajax/producto.ajax.php",
				method:"POST",
				data:dato,
				success:function(){
					
					dataTable.ajax.reload()
				}
			});

});




});