  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Ofertas
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Producto Oferta</li>
      </ol>
    </section>

    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Nueva Oferta</h3>
        </div>
        <div class="box-body">
          <div class="form-row align-items-center">
            <div class="form-group col-md-6">
              <label for="nuevoDescuento" class="col-sm-4 control-label">Descuento :</label>
              <div class="input-group" class="col-sm-8">
                <input type="text" class="form-control" name="nuevoDescuento" id="nuevoDescuento" placeholder="Ingresar Descuento" required>
                <span class="input-group-addon">%</span> 
              </div>

            </div>
            <div class="form-group col-md-6 ">
                <label for="calendar-oferta" class="col-sm-4 control-label">Fecha Oferta :</label>

                  <div class="input-group" class="col-sm-8" id="calendar-oferta">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="reservation">
                  </div>
            </div>
          </div>
          <div class="form-row align-items-center">
            <div class="form-group col-md-6">
              <label for="det-oferta" class="col-sm-4 control-label">Detalles :</label>
              <textarea name="det-oferta" id="det-oferta" style="margin: 0px; width: 60%; height: 57px;" rows="3" class="form-control col-sm-8"></textarea>  
            </div>
            <div class="form-group col-md-6">
              <label for="btn-agregar-producto-oferta" class="col-sm-4 control-label">Agregar Productos :</label>
              <div class="col-sm-8">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto" id="btn-agregar-producto-oferta" type="button">
                  <i class="fa fa-search"></i>
                  Buscar Productos
                </button>  
              </div>
            
            </div>
          </div>

        </div>
        <div class="box-footer">
          <div class="box box-info">
            <div class="box-header with-border">
              <h5 class="box-tittle">Lista Productos</h3>
            </div>
            <div class="box-body">
            
            <table class="table table-bordered table-striped dt-responsive">
         
              <thead>
         
               <tr>
           
                 <th style="width:10px">Código</th>
                 <th>Producto</th>
                 <th>Precio Inicial</th>
                 <th>Descuento</th>
                 <th>Precio Final</th>
                 <th>Acciones</th>

               </tr> 

              </thead>

              <tbody>
                <tr>
                    <td>1</td>
                    <td class="text-uppercase ">Pulseras Roja</td>
                    <td>S/. 3.00</td>
                    <td>S/. 0.30</td>
                    <td>S/. 0.70</td>
                    <td>
                      <button class="btn btn-danger" ><i class="fa fa-times"></i></button>

                    </td>

                </tr>
                <tr>
                    <td>2</td>
                    <td class="text-uppercase ">Pulseras Azul</td>
                    <td>S/. 3.00</td>
                    <td>S/. 0.30</td>
                    <td>S/. 0.70</td>
                    <td>
                      <button class="btn btn-danger" ><i class="fa fa-times"></i></button>

                    </td>

                </tr>
              </tbody>

            </table>
          </div>
          <div style="margin-top: 20px;">
            <input type="submit" class="btn btn-primary pull-right mt-2" value="Guardar Oferta">  
          </div>
          
        </div>
      </div>
    </section>
  </div>



  <!--=====================================
MODAL AGREGAR PRODUCTOS
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Buscar Productos</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">
          <form class="form-horizontal">
            <div class="form-group">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Buscar Productos">
              </div>
              <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
                Buscar
              </button>
            </div>
          </form>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr class="warning">
                  <th>Código</th>
                  <th>Producto</th>
                  <th>
                    <span class="pull-right">
                      Acción  
                    </span>
                    
                  </th>
                </tr>
                <tr>
                  <td>P0001</td>
                  <td>Pulseras</td>
                  <td>
                    <span class="pull-right">
                      <a href="#">
                        <i class="glyphicon glyphicon-plus"  style="font-size: 24px; 
                        color:#5CB85C;"></i>
                      </a>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <span class="pull-right">
                      <ul class="pagination pagination-sm no-margin pull-right">
                        <li class="disabled">
                          <span>
                            <a>< anterior</a>
                          </span>
                        </li>
                        <li class="active">
                            <a>1</a>
                        </li>
                        <li class="disabled">
                          <span>
                            <a>siguiente ></a>
                          </span>
                        </li>
                      </ul>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
                     

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Salir</button>

        </div>

      </form>

    </div>

  </div>

</div>

  <script>
      //Date range picker
      $('#reservation').daterangepicker({
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

  </script>