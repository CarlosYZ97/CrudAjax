<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Gestionar Grupos de Usuario
    
    </h1>
    <?php 
        // $valor = $_SESSION["perfil"];
        // $permisos = ControladorPermisos::ctrMostrarPermisos($valor);
      ?>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Gestionar Grupos de Usuario</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <?php 
           // $permisosAgregarGUS  = false;
           // $permisosEditarGUS  = false;
           // $permisosEliminarGUS  = false;

           // foreach ($permisos as $key => $value) {
           //        if($value["cod_prm_in"] == 15){
           //          $permisosAgregarGUS = true;
           //        }else if($value["cod_prm_in"] == 16){
           //          $permisosEditarGUS = true;
           //        }else if($value["cod_prm_in"]==17){
           //          $permisosEliminarGUS = true;
                    
           //      }
            // }

            // if(!$permisosAgregarGUS){
              echo '<button class="btn btn-primary" data-toggle="modal" data-target="#permisos_modal">
          
                    Agregar Nuevo Rol

                  </button>';   
            // }

           

         ?>
  
        

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas tablaPermisos">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Rol</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
          <?php 

            // $item =null;
            // $valor = null;
            // $roles = ControladorRoles::ctrMostrarRoles($item,$valor);

            // foreach ($roles as $key => $value) {
               echo '<tr>
                    <td>1</td>
                    <td class="text-uppercase ">Administrador</td>

                    <td>

                      <div class="btn-group">';

                      // if(!$permisosEditarGUS){
                        echo '
                      
                        <button class="btn btn-warning btnEditarRol" data-toggle="modal" data-target="#editar_permisos_modal" idRol="1"><i class="fa fa-pencil"></i></button>';  
                      // }

                      // if(!$permisosEliminarGUS){
                          echo '<button class="btn btn-danger btnEliminarRol" idRol="1"><i class="fa fa-times"></i></button>';
                      // }

                      echo '

                      </div>  

                    </td>

                  </tr>';
            // }
           


           ?>
        
        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>
<?php 
  // $borrarRol = new ControladorPermisos();
  // $borrarRol ->ctrBorrarRol();

?>


<form class="form-horizontal" method="post" id="guardar_permisos" name="guardar_permisos">
<!-- Modal -->
<div class="modal fade" id="editar_permisos_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar Rol</h4>
      </div>
      <div class="modal-body">
	  
            <div class="form-group  ">
          		<label for="nombres" class="col-sm-4 control-label">Nivel Administrador</label>
          		<div class="col-sm-8">
          		  <input type="text" class="form-control" id="editarRol" name="editarRol" placeholder="Ingresa el nombre del nivel administrador" value="" required>
                <input type="hidden" name="cod_rol" id="codRolEditar" value="">
          		</div>
              <input type="hidden" name="codRol" value="">
      	     </div>

      	  <table class="table table-hover table-nomargin">
        		<thead>
          		<tr>
          			<th >Módulo</th>
          			<th ><input name="Todos" type="checkbox" value=""  class="check_ver"/> Agregar</th>
          			<th ><input name="Todos" type="checkbox" value=""  class="check_mod"/> Editar</th>
          			<th ><input name="Todos" type="checkbox" value=""  class="check_del"/> Eliminar</th>
          		</tr>
        		</thead>
      		<tbody>

        		<tr>
        			<td>
        				Simpatizantes		<input type='hidden' name='permisos_1' value='Simpatizantes'>
        			</td>
        			<td><input  type ='checkbox' name='add[]' value='1' class='ck_edit ck'></td>
        			<td><input  type ='checkbox' name='edit[]'  value='2' class='ck_edit ck1'></td>
        			<td><input  type ='checkbox' name='del[]'  value='3'  class='ck_edit ck2'></td>
        		</tr>
      			<tr>
        			<td>
        				Personeros			<input type='hidden' name='permisos_2' value='Personeros'>
        			</td>
        			<td><input  type ='checkbox' name='add[]' value='4' class='ck_edit ck'></td>
        			<td><input  type ='checkbox' name='edit[]'  value='21' class='ck_edit ck1'></td>
        			<td><input  type ='checkbox' name='del[]'  value='5'  class='ck_edit ck2'></td>
        		</tr>
      			<tr>
        			<td>
        				Locales				<input type='hidden' name='permisos_3' value='Locales'>
        			</td>
        			<td><input  type ='checkbox' name='add[]' value='6' class='ck_edit ck'></td>
        			<td><input  type ='checkbox' name='edit[]'  value='7' class='ck_edit ck1'></td>
        			<td><input  type ='checkbox' name='del[]'  value='8'  class='ck_edit ck2'></td>
        		</tr>
      			<tr>
        			<td>
        				Colaboradores				<input type='hidden' name='permisos_4' value='Colaboradores'>
        			</td>
        			<td><input  type ='checkbox' name='add[]' value='12' class='ck_edit ck'></td>
        			<td><input  type ='checkbox' name='edit[]'  value='13' class='ck_edit ck1'></td>
        			<td><input  type ='checkbox' name='del[]'  value='14'  class='ck_edit ck2'></td>
        		</tr>
      			<tr>
        			<td>
        				Centro de Votaciones				<input type='hidden' name='permisos_5' value='CenVot'>
        			</td>
        			<td><input  type ='checkbox' name='add[]' value='9' class='ck_edit ck'></td>
        			<td><input  type ='checkbox' name='edit[]'  value='10' class='ck_edit ck1'></td>
        			<td><input  type ='checkbox' name='del[]'  value='11'  class='ck_edit ck2'></td>
        		</tr>

        			<td>
        				Administrador				<input type='hidden' name='permisos_7' value='Usuarios'>
        			</td>
        			<td><input  type ='checkbox' name='add[]' value='18' class='ck_edit ck'></td>
        			<td><input  type ='checkbox' name='edit[]'  value='19' class='ck_edit ck1'></td>
        			<td><input  type ='checkbox' name='del[]'  value='20'  class='ck_edit ck2'></td>
        		</tr>
      			<tr>
        			<td>
        				Permisos				<input type='hidden' name='permisos_8' value='Permisos'>
        			</td>
        			<td><input  type ='checkbox' name='add[]' value='15' class='ck_edit ck' ></td>
        			<td><input  type ='checkbox' name='edit[]'  value='16' class='ck_edit ck1'></td>
        			<td><input  type ='checkbox' name='del[]'  value='17'  class='ck_edit ck2'></td>
        		</tr>
      		</tbody>
      	</table>
      	  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" id="guardar_datos" class="btn btn-primary">Modificar</button>
      </div>
    </div>
  </div>
</div>


<?php
  // $permisos = new ControladorPermisos();
  // $permisos -> ctrEditarPermisos();
?>
</form>

<form class="form-horizontal" method="post" id="editar_permisos" name="editar_permisos">
<!-- Modal -->
<div class="modal fade" id="permisos_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Nuevo Administrador</h4>
      </div>
      <div class="modal-body">
    
            <div class="form-group  ">
              <label for="nombres" class="col-sm-4 control-label">Nivel Administrador</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="rol" name="rol" placeholder="Ingresa el nombre del nivel administrador" required>
              </div>
             </div>

          <table class="table table-hover table-nomargin">
            <thead>
              <tr>
                <th >Módulo</th>
                <th ><input name="Todos" type="checkbox" value="1" id="all_ver" class="check_ver"/> Agregar</th>
                <th ><input name="Todos" type="checkbox" value="2" id="all_mod" class="check_mod"/> Editar</th>
                <th ><input name="Todos" type="checkbox" value="3" id="all_del" class="check_del"/> Eliminar</th>
              </tr>
            </thead>
          <tbody>

            <tr>
              <td>
                Simpatizantes   <input type='hidden' name='permisos_1' value='Simpatizantes'>
              </td>
              <td><input  type ='checkbox' name='add[]' value='1' class='ck'></td>
              <td><input  type ='checkbox' name='edit[]'  value='2' class='ck1'></td>
              <td><input  type ='checkbox' name='del[]'  value='3'  class='ck2'></td>
            </tr>
            <tr>
              <td>
                Personeros      <input type='hidden' name='permisos_2' value='Personeros'>
              </td>
              <td><input  type ='checkbox' name='add[]' value='4' class='ck'></td>
              <td><input  type ='checkbox' name='edit[]'  value='21' class='ck1'></td>
              <td><input  type ='checkbox' name='del[]'  value='5'  class='ck2'></td>
            </tr>
            <tr>
              <td>
                Locales       <input type='hidden' name='permisos_3' value='Locales'>
              </td>
              <td><input  type ='checkbox' name='add[]' value='6' class='ck'></td>
              <td><input  type ='checkbox' name='edit[]'  value='7' class='ck1'></td>
              <td><input  type ='checkbox' name='del[]'  value='8'  class='ck2'></td>
            </tr>
            <tr>
              <td>
                Colaboradores       <input type='hidden' name='permisos_4' value='Colaboradores'>
              </td>
              <td><input  type ='checkbox' name='add[]' value='12' class='ck'></td>
              <td><input  type ='checkbox' name='edit[]'  value='13' class='ck1'></td>
              <td><input  type ='checkbox' name='del[]'  value='14'  class='ck2'></td>
            </tr>
            <tr>
              <td>
                Centro de Votaciones        <input type='hidden' name='permisos_5' value='CenVot'>
              </td>
              <td><input  type ='checkbox' name='add[]' value='9' class='ck'></td>
              <td><input  type ='checkbox' name='edit[]'  value='10' class='ck1'></td>
              <td><input  type ='checkbox' name='del[]'  value='11'  class='ck2'></td>
            </tr>

            <tr>
              <td>
                Reportes        <input type='hidden' name='permisos_6' value='Reportes'>
              </td>
              <td><input  type ='checkbox' name='add[]' value='1' class='ck'></td>
              <td><input  type ='checkbox' name='edit[]'  value='1' class='ck1'></td>
              <td><input  type ='checkbox' name='del[]'  value='1'  class='ck2'></td>
            </tr>
            <tr>
              <td>
                Administrador       <input type='hidden' name='permisos_7' value='Usuarios'>
              </td>
              <td><input  type ='checkbox' name='add[]' value='18' class='ck'></td>
              <td><input  type ='checkbox' name='edit[]'  value='19' class='ck1'></td>
              <td><input  type ='checkbox' name='del[]'  value='20'  class='ck2'></td>
            </tr>
            <tr>
              <td>
                Permisos        <input type='hidden' name='permisos_8' value='Permisos'>
              </td>
              <td><input  type ='checkbox' name='add[]' value='15' class='ck'></td>
              <td><input  type ='checkbox' name='edit[]'  value='16' class='ck1'></td>
              <td><input  type ='checkbox' name='del[]'  value='17'  class='ck2'></td>
            </tr>
          </tbody>
        </table>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" id="guardar_datos" class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </div>
</div>


<?php
  // $permisos = new ControladorPermisos();
  // $permisos -> ctrCrearPermisosDenegados();
?>
</form>

<script language="javascript">
$('#all_ver').change(function() {
    var checkboxes = $(".ck");
    if($(this).is(':checked')) {
        checkboxes.prop('checked', true);
    } else {
        checkboxes.prop('checked', false);
    }
});
$('#all_mod').change(function() {
    var checkboxes = $(".ck1");
    if($(this).is(':checked')) {
        checkboxes.prop('checked', true);
    } else {
        checkboxes.prop('checked', false);
    }
});
$('#all_del').change(function() {
    var checkboxes = $(".ck2");
    if($(this).is(':checked')) {
        checkboxes.prop('checked', true);
    } else {
        checkboxes.prop('checked', false);
    }
});
</script>

<script>
  $('.tablas').DataTable({
    "language" : {
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