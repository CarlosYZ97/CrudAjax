  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Categoría
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Producto Categoría</li>
      </ol>
    </section>

    <section class="content">

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">
            
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">Nueva Categoría</button>

          </h3>
        </div>
        <div class="box-body">
          <table id="tablaCategoria" class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">Código</th>
           <th>Categoría</th>
           <th></th>
           <th></th>
         </tr> 

        </thead>

        <tbody>

        </tbody>

       </table>
        </div>
      </div>
    </section>
  </div>
<!--=====================================
MODAL AGREGAR CATEGORIAS
======================================-->

<div id="modalAgregarCategoria" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" id="AgregarCategoriaProducto">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Añadir Categoría</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
          <div class="form-row align-items-center">
            <div class="form-group col-md-6">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control" name="nuevoCategoria" id="nuevoCategoria" placeholder="Ingresar Categoría" required>

              </div>

            </div>
          </div>

            

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button class="btn btn-primary">Guardar Categoría</button>

        </div>


        <?php 
        // $nuevoCategoria = new ControllerProducto();
        // $nuevoCategoria -> ctrAgregarCategoria();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR CATEGORIAS
======================================-->

<div id="modalEditarCategoria" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post"  id="editarFormCategoria">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Modificar Categoría</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
          <div class="form-row align-items-center">
            <div class="form-group col-md-6">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                <input type="hidden" id="editarIdCategoria" name="editarIdCategoria">
                <input type="text" class="form-control" name="editarCategoria" id="editarCategoria" placeholder="Ingresar Categoría" required>

              </div>

            </div>

          </div>

            

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button class="btn btn-primary">Modificar Categoría</button>

        </div>

      </form>

    </div>

  </div>

</div>



  <script>
//   $(".tablas").DataTable({

//   "language": {

//     "sProcessing":     "Procesando...",
//     "sLengthMenu":     "Mostrar _MENU_ registros",
//     "sZeroRecords":    "No se encontraron resultados",
//     "sEmptyTable":     "Ningún dato disponible en esta tabla",
//     "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
//     "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
//     "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
//     "sInfoPostFix":    "",
//     "sSearch":         "Buscar:",
//     "sUrl":            "",
//     "sInfoThousands":  ",",
//     "sLoadingRecords": "Cargando...",
//     "oPaginate": {
//     "sFirst":    "Primero",
//     "sLast":     "Último",
//     "sNext":     "Siguiente",
//     "sPrevious": "Anterior"
//     },
//     "oAria": {
//       "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
//       "sSortDescending": ": Activar para ordenar la columna de manera descendente"
//     }

//   }

// });
</script>