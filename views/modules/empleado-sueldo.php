<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Sueldo de Empleados
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Lista de Empleados</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        
           

              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarEmpleadoSueldo">
          
                    Nuevo Sueldo

                  </button> 

              <div class="pull-right">
              <div class="form-group">
                <div class="input-group">
                  <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                    <span>
                      <i class="fa fa-calendar"></i> Rango de Fecha
                    </span>
                    <i class="fa fa-caret-down"></i>
                  </button>
                </div>
              </div>
              </div>
       

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">Código</th>
           <th>Nombres</th>
           <th>Apellidos</th>
           <th>Tipo Trabajador</th>
           <th>Horas Semanales</th>
           <th>Horas Diarias</th>
           <th>Sueldo</th>
           <th>Tipo Pago</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
              <tr>
                    <td>E0001</td>
                    <td class="text-uppercase ">Carlos A.</td>
                    <td>Yunca Zegarra</td>
                    <td>Social Media</td>
                    <td>28</td>
                    <td>4</td>
                    <td>S/. 550</td>
                    <td>Efectivo</td>
                    <td>

                      <div class="btn-group">


                        <button class="btn btn-warning " data-toggle="modal" data-target="#modalModificarEmpleadoSueldo"><i class="fa fa-pencil"></i></button> 
                        <button class="btn btn-danger" ><i class="fa fa-times"></i></button>
                      
                      </div>  

                    </td>

                  </tr>
                      <tr>
                    <td>E0002</td>
                    <td class="text-uppercase ">Carlos A.</td>
                    <td>Yunca Zegarra</td>
                    <td>Social Media</td>
                    <td>28</td>
                    <td>4</td>
                    <td>S/. 550</td>
                    <td>Efectivo</td>
                    <td>

                      <div class="btn-group">


                        <button class="btn btn-warning" data-toggle="modal" data-target="#modalModificarEmpleadoSueldo"><i class="fa fa-pencil"></i></button> 
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
MODAL AGREGAR EMPLEADO SUELDO
======================================-->

<div id="modalAgregarEmpleadoSueldo" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Añadir Empleado Sueldo</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <form>
              <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <select name="" id="" class="form-control">
                        <option value="0">Seleccione Empleado</option>
                        <option value="1">Kevin Silva</option>
                        <option value="2">Carlos Yunca</option>
                      </select>
                    </div>
                    
                  </div>
                  
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <select name="" id="" class="form-control">
                        <option value="0">Seleccione Tipo de Sueldo</option>
                        <option value="1">Por Hora</option>
                        <option value="2">Sueldo Base</option>
                      </select>
                    </div>
                    
                  </div>
                  
                </div>
              
              </div>
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <select name="" id="" class="form-control">
                        <option value="0">Seleccione Tipo Pago</option>
                        <option value="1">BCP</option>
                        <option value="2">Continental</option>
                        <option value="3">Efectivo</option>
                      </select>
                    </div>
                    
                  </div>
                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Ingrese Sueldo x Hora">    
                    </div>
                    
                  </div>
                  
                </div>

              
              </div>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type="text" class="form-control" placeholder="Ingrese N° Horas">
                </div>
              </div>
            </form>
           

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Sueldo</button>

        </div>

      </form>

    </div>

  </div>

</div>
<!--=====================================
MODAL MODIFICAR EMPLEADO SUELDO
======================================-->

<div id="modalModificarEmpleadoSueldo" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Modificar Empleado Sueldo</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <form>
              <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <select name="" id="" class="form-control">
                        <option value="0">Seleccione Empleado</option>
                        <option value="1">Kevin Silva</option>
                        <option value="2">Carlos Yunca</option>
                      </select>
                    </div>
                    
                  </div>
                  
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <select name="" id="" class="form-control">
                        <option value="0">Seleccione Tipo de Sueldo</option>
                        <option value="1">Por Hora</option>
                        <option value="2">Sueldo Base</option>
                      </select>
                    </div>
                    
                  </div>
                  
                </div>
              
              </div>
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <select name="" id="" class="form-control">
                        <option value="0">Seleccione Tipo Pago</option>
                        <option value="1">BCP</option>
                        <option value="2">Continental</option>
                        <option value="3">Efectivo</option>
                      </select>
                    </div>
                    
                  </div>
                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Ingrese Sueldo x Hora">    
                    </div>
                    
                  </div>
                  
                </div>

              
              </div>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type="text" class="form-control" placeholder="Ingrese N° Horas">
                </div>
              </div>
            </form>
           

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar Sueldo</button>

        </div>

      </form>

    </div>

  </div>

</div>

<script>

      $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )
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