  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Lista Ofertas
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Producto Ver Ofertas</li>
      </ol>
    </section>

    <section class="content">

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">
            <a href="producto-oferta" class="btn btn-primary">Nueva Oferta</a>
          </h3>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">Código</th>
           <th>Producto</th>
           <th>Descuento</th>
           <th>Fecha</th>
           <th>Precio Inicial</th>
           <th>Precio Final</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
              <tr>
                    <td>P0001</td>
                    <td class="text-uppercase ">Pulseras</td>
                    <td>10%</td>
                    <td>11/08/2018 - 12/08/2018</td>
                    <td>S/. 3.00</td>
                    <td>S/. 2.70</td>
                    <td>
                      <div class="btn-group">'
                        <button class="btn btn-warning" data-toggle="modal" data-target="#modalEditarOferta"><i class="fa fa-pencil"></i></button> 
                        <button class="btn btn-danger" ><i class="fa fa-times"></i></button>
                     
                      </div>  

                    </td>

                  </tr>
        </tbody>

       </table>
        </div>
      </div>
    </section>
  </div>

<!--=====================================
MODAL EDITAR CATEGORIAS
======================================-->

<div id="modalEditarOferta" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Modificar Oferta</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            
          <div class="form-row align-items-center">
            <div class="form-group">
              <label for="nuevoDescuento" class="col-sm-4 control-label">Descuento :</label>
              <div class="input-group" class="col-sm-8">
                <input type="text" class="form-control" name="nuevoDescuento" id="nuevoDescuento" placeholder="Ingresar Descuento" required>
                <span class="input-group-addon">%</span> 
              </div>

            </div>
            <div class="form-group">
                <label for="calendar-oferta" class="col-sm-4 control-label">Fecha Oferta :</label>

                  <div class="input-group" class="col-sm-8" id="calendar-oferta">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="reservationEditar">
                  </div>
            </div>

            <div class="form-group">
              <label for="det-oferta" class="col-sm-4 control-label">Detalles :</label>
              <textarea name="det-oferta" id="det-oferta" style="margin: 0px; width: 66%; height: 57px;" rows="3" class="form-control col-sm-8"></textarea>  
            </div>
          </div>

            

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar Oferta</button>

        </div>

      </form>

    </div>

  </div>

</div>



  <script>
  //Date range picker
  $('#reservationEditar').daterangepicker({
    "locale": {
        "format": "DD/MM/YYYY",
        "separator": " - ",
        "applyLabel": "Aceptar",
        "cancelLabel": "Cancelar",
        "fromLabel": "De",
        "toLabel": "A",
        "customRangeLabel": "Custom",
        "daysOfWeek": [
            "Dom",
            "Lun",
            "Mar",
            "Mie",
            "Jue",
            "Vie",
            "Sáb"
        ],
        "monthNames": [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
        ],
        "firstDay": 1
    }
  });

  $(".tablas").DataTable({

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

  }

});
</script>