  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Stock
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Producto Stock</li>
      </ol>
    </section>

    <section class="content">

      <div class="box">
        <div class="box-header with-border">

          <div class="row">
            <div class="col-md-3">
              <h3 class="box-title">Lista Producto Stock</h3>
            </div>
            <div class="col-md-9">
              <div class="herramientasFiltro">
                <div class="row">
                  <div class="col-md-10">
                    <div class="form-group form-group-sm busquedaProductos">
                      <input type="text" class="form-control" placeholder="Busqueda de Producto">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group form-group-sm tipoVista">
                      <select class="form-control" name="tipoVistaPS" id="tipoVistaPS">
                        <option value="1">Cuadriculada</option>
                        <option value="2">Lista</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row pull-right">
            <div class="col-md-4">
              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#nuevoProducto">Nuevo</button>
            </div>
            <div class="col-md-8">
              <div class="form-group form-group-sm">
                <select class="form-control" name="" id="">
                  <option value="">Mostrar</option>
                  <option value="">25</option>
                  <option value="">50</option>
                  <option value="">100</option>
                  <option value="">200</option>
                  <option value="">1000</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="box-body">
          <div>
            <div class="row">
              <div class="col-md-2">
                <div class="form-group" style="width: 173px;">
                  <label>CATEGORIAS</label>
                  <select multiple class="form-control">
                    <option selected>Todos</option>
                    <option>Anillos</option>
                    <option>Cadenas</option>
                    <option>Brazaletes</option>
                  </select>
                </div>
                <br>
                <div>
                  <label>MEDIDAS</label>
                  <div>
                    <input class="botonCheck" type="checkbox" id="chk1" name="chk" value="3.1">
                    <label class="labelBotonCheck" for="chk1">3.1</label>
                    <input class="botonCheck"type="checkbox" id="chk2" name="chk"value="3.2">
                    <label class="labelBotonCheck" for="chk2">3.2</label>
                    <input class="botonCheck" type="checkbox" id="chk3" name="chk" value="3.3">
                    <label class="labelBotonCheck" for="chk3">3.3</label>
                  </div>
                  <div>
                    <input class="botonCheck" type="checkbox" id="chk5" name="chk" value="4.1">
                    <label class="labelBotonCheck" for="chk5">4.1</label>
                    <input class="botonCheck"type="checkbox" id="chk6" name="chk"value="4.2">
                    <label class="labelBotonCheck" for="chk6">4.2</label>
                    <input class="botonCheck" type="checkbox" id="chk7" name="chk" value="4.3">
                    <label class="labelBotonCheck" for="chk7">4.3</label>
                  </div>
                  <div>
                    <input class="botonCheck" type="checkbox" id="chk9" name="chk" value="5.1">
                    <label class="labelBotonCheck" for="chk9">5.1</label>
                    <input class="botonCheck"type="checkbox" id="chk10" name="chk"value="5.2">
                    <label class="labelBotonCheck" for="chk10">5.2</label>
                    <input class="botonCheck" type="checkbox" id="chk11" name="chk" value="5.3">
                    <label class="labelBotonCheck" for="chk11">5.3</label>
                  </div>
                  <div>
                    <input class="botonCheck" type="checkbox" id="chk13" name="chk" value="6.1">
                    <label class="labelBotonCheck" for="chk13">6.1</label>
                    <input class="botonCheck"type="checkbox" id="chk14" name="chk"value="6.2">
                    <label class="labelBotonCheck" for="chk14">6.2</label>
                    <input class="botonCheck" type="checkbox" id="chk15" name="chk" value="6.3">
                    <label class="labelBotonCheck" for="chk15">6.3</label>
                  </div>
                </div>
                <br>
                <div class="form-group" style="width: 173px;">
                  <label>PUBLICO</label>
                  <select multiple class="form-control">
                     <option selected>Todos</option>
                    <option>Hombres</option>
                    <option>Mujeres</option>
                  </select>
                </div>
                <br>
                <div class="form-group" style="width: 173px;">
                  <label>MATERIAL</label>
                  <select multiple class="form-control">
                     <option selected>Todos</option>
                    <option>Acero</option>
                    <option>Plata</option>
                    <option>Oro</option>
                  </select>
                </div>
                <div>
                   <label>PRECIO</label>
                  <form class="range-field">
                    <input type="range" min="0" max="1000" style="width: 173px;" />
                </form>
                </div>
                <br>
                <div class="form-group" style="width: 173px;">
                  <label>CANTIDAD</label>
                  <select multiple class="form-control">
                    <option selected>1-20</option>
                    <option>20-30</option>
                    <option>30-40</option>
                    <option>40-50</option>
                    <option>100-200</option>
                  </select>
                </div>
              </div>
              <div class="col-md-9">
                <div id="contendorProductoStock">
                  <div class="row">
                    <?php for($i=0;$i<3; $i++){?>
                    <div class="col-md-4">
                      <div class="productoCuadro">
                        <div class="col_1_of_single1 span_1_of_single1">
                          <div class="view1 view-fifth1">
                            <div class="top_box">
                              <a href="#">
                                <div class="grid_img">
                                  <div class="css3"><img src="views/img/anillo.jpg" width="250" alt=""/></div>
                                </div>
                              </a>
                              <p>Corona Angie</p>
                              <p class="medidaProducto">200</p>
                              <p>S/.200</p>
                              <div class="row">
                                <div class="col-sm-4 col-md-4">
                                  <p>Oro</p>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                  <p class="productoNuevo"></p>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                  <p class="productoOferta">Oferta</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="productoCuadro">
                        <div class="col_1_of_single1 span_1_of_single1">
                          <div class="view1 view-fifth1">
                            <div class="top_box">
                              <a href="#">
                                <div class="grid_img">
                                  <div class="css3"><img src="views/img/anillo.jpg" width="250" alt=""/></div>
                                </div>
                              </a>
                              <p>Corona Angie</p>
                              <p class="medidaProducto">200</p>
                              <p>S/.200</p>
                              <div class="row">
                                <div class="col-sm-4 col-md-4">
                                  <p>Oro</p>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                  <p class="productoNuevo">Nuevo</p>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                  <p class="productoOferta"></p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="productoCuadro">
                        <div class="col_1_of_single1 span_1_of_single1">
                          <div class="view1 view-fifth1">
                            <div class="top_box">
                              <a href="#">
                                <div class="grid_img">
                                  <div class="css3"><img src="views/img/anillo.jpg" width="250" alt=""/></div>
                                </div>
                              </a>
                              <p>Corona Angie</p>
                              <p class="medidaProducto">200</p>
                              <p>S/.200</p>
                              <div class="row">
                                <div class="col-sm-4 col-md-4">
                                  <p>Oro</p>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                  <p class="productoNuevo">Nuevo</p>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                  <p class="productoOferta">Oferta</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </div>
                    </div>
                  <?php }?>
                  </div>
                </div>

              </div>
            </div>
          </div>
        <div class="box-footer">
        </div>
      </div>
    </section>

  </div>

 <!-- Modal para agregar nuevo producto stock -->

  <div class="modal fade" id="nuevoProducto">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Agregar Nuevo Producto</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
              <div class="imagenProducto">
                  <img src="views/img/anillo.jpg" width="250" alt=""/>
              </div>
              <div class="botonSubirImagen ">
                <button class="btn btn-primary">Subir Imagen</button>
              </div>
            </div>
            <div class="col-md-8">
              <h5>Detalles del Producto</h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                      <input type="text" class="form-control" placeholder="Codigo" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                      <select name="" id="" class="form-control">
                        <option value="" selected>Material</option>
                        <option value="">Oro</option>
                        <option value="">Acero</option>
                        <option value="">Plata</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                      <input type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                      <input type="number" class="form-control" placeholder="Medida">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="input-group" style="width: 100%;">
                      <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Speech"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                      <select name="" id="" class="form-control">
                        <option value="" selected>Estado</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                      <input type="text" class="form-control" placeholder="Costo">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                      <input type="text" class="form-control" placeholder="Precio de Venta">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                      <input type="text" class="form-control" placeholder="Utilidad">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                      <select name="" id="" class="form-control">
                        <option value="" selected>Tipo Público</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-th"></i></span> 
                      <input type="text" class="form-control" placeholder="Stock Inicial">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
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