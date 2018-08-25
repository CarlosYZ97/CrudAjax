<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Lista de Empleados
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Lista de Empleados</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        
           

              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarEmpleado">
          
                    Nuevo Empleado

                  </button> 
       

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">Código</th>
           <th>Nombres</th>
           <th>Apellidos</th>
           <th>Tipo Trabajador</th>
           <th>Estado</th>
           <th>Usuario</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
              <tr>
                    <td>E0001</td>
                    <td class="text-uppercase ">Carlos A.</td>
                    <td>Yunca Zegarra</td>
                    <td>Social Media</td>
                    <td><button class="btn btn-success btn-xs">activado</button></td>
                    <td>Usuario</td>
                    <td>

                      <div class="btn-group">


                        <button class="btn btn-warning " data-toggle="modal" data-target="#modalModificarEmpleado"><i class="fa fa-pencil"></i></button> 
                        <button class="btn btn-danger" ><i class="fa fa-times"></i></button>
                      
                      </div>  

                    </td>

                  </tr>
                      <tr>
                    <td>E0002</td>
                    <td class="text-uppercase ">Carlos A.</td>
                    <td>Yunca Zegarra</td>
                    <td>Social Media</td>
                    <td><button class="btn btn-danger btn-xs">desactivado</button></td>
                    <td>Usuario</td>
                    <td>

                      <div class="btn-group">


                        <button class="btn btn-warning" data-toggle="modal" data-target="#modalModificarEmpleado"><i class="fa fa-pencil"></i></button> 
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
MODAL AGREGAR EMPLEADO
======================================-->

<div id="modalAgregarEmpleado" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Añadir Empleado</h4>

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
                      <input type="text" class="form-control" placeholder="Ingrese Código">    
                    </div>
                    
                  </div>
                  
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <select name="" id="" class="form-control">
                        <option value="0">Seleccione Estado</option>
                        <option value="1">Activado</option>
                        <option value="2">Desactivado</option>
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
                        <option value="0">Seleccione Tipo Empleado</option>
                        <option value="1">Administrador</option>
                        <option value="2">Social Media</option>
                      </select>
                    </div>
                    
                  </div>
                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Ingrese Dni">    
                    </div>
                    
                  </div>
                  
                </div>

              
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Ingrese Nombres">    
                    </div>
                    
                  </div>
                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Ingrese Usuario">    
                    </div>
                    
                  </div>
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Ingrese Apellido Paterno">    
                    </div>
                    
                  </div>
                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Ingrese Materno">    
                    </div>
                    
                  </div>
                  
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">@</span>
                  <input type="text" class="form-control" placeholder="Ingrese email">
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

          <button type="submit" class="btn btn-primary">Guardar Empleado</button>

        </div>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL AGREGAR EMPLEADO
======================================-->

<div id="modalModificarEmpleado" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Modificar Empleado</h4>

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
                      <input type="text" class="form-control" placeholder="Ingrese Código">    
                    </div>
                    
                  </div>
                  
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <select name="" id="" class="form-control">
                        <option value="0">Seleccione Estado</option>
                        <option value="1">Activado</option>
                        <option value="2">Desactivado</option>
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
                        <option value="0">Seleccione Tipo Empleado</option>
                        <option value="1">Administrador</option>
                        <option value="2">Social Media</option>
                      </select>
                    </div>
                    
                  </div>
                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Ingrese Dni">    
                    </div>
                    
                  </div>
                  
                </div>

              
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Ingrese Nombres">    
                    </div>
                    
                  </div>
                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Ingrese Usuario">    
                    </div>
                    
                  </div>
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Ingrese Apellido Paterno">    
                    </div>
                    
                  </div>
                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" placeholder="Ingrese Materno">    
                    </div>
                    
                  </div>
                  
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">@</span>
                  <input type="text" class="form-control" placeholder="Ingrese email">
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

          <button type="submit" class="btn btn-primary">Modificar Empleado</button>

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