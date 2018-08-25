  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Material
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Producto Material</li>
      </ol>
    </section>

    <section class="content">

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">
            
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarMaterial">Nueva Material</button>

          </h3>
        </div>
        <div class="box-body">
                 <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">Código</th>
           <th>Material</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
              <tr>
                    <td>1</td>
                    <td class="text-uppercase ">Oro</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-warning" data-toggle="modal" data-target="#modalEditarMaterial"><i class="fa fa-pencil"></i></button> 
                        <button class="btn btn-danger" ><i class="fa fa-times"></i></button>
                     
                      </div>  

                    </td>

                  </tr>
                      <tr>
                    <td>2</td>
                    <td class="text-uppercase ">Plata</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-warning" data-toggle="modal" data-target="#modalEditarMaterial"><i class="fa fa-pencil"></i></button> 
                        <button class="btn btn-danger"><i class="fa fa-times"></i></button>
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
MODAL AGREGAR MATERIAL
======================================-->

<div id="modalAgregarMaterial" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Añadir Material</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
          
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control" name="nuevoMaterial" id="nuevoMaterial" placeholder="Ingresar Material" required>

              </div>

            </div>
           

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Material</button>

        </div>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR MATERIAL
======================================-->

<div id="modalEditarMaterial" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Modificar Material</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control" name="editarMaterial" id="editarMaterial" placeholder="Ingresar Material" required>

              </div>

            </div>            

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar Material</button>

        </div>

      </form>

    </div>

  </div>

</div>



  <script>
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