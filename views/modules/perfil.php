<div class="content-wrapper">

  <section class="content-header">
	  <h1><i class='fa fa-edit'></i> Editar Perfil</h1>
		
	</section>

  <section class="content">
		<div class="row">
		
      <div class="col-md-3">

        <div class="box box-primary">
          <div class="box-body box-profile">
      			<div id="load_img">
              
                <img src="views/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="400px">
              
       			</div>                   

                    
          </div>
                  
        </div>
          
      </div>

      <div class="col-md-9">
	      <form name="update_register" id="update_register" class="form-horizontal" method="post" enctype="multipart/form-data">
		
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#details" data-toggle="tab" aria-expanded="false">Perfil de Usuario</a></li>
            </ul>
            <div class="tab-content">
              <div id="resultados_ajax"></div>
           
             

              <div class="tab-pane active" id="details">
                
                  <div class="form-group ">
                    <label for="editarNombre" class="col-sm-2 control-label">Nombre</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="editarNombre" name="editarNombre"  required value="Carlos">
                    </div>
					          <label for="editarApePat" class="col-sm-2 control-label">Apellido Paterno</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="editarApePat" name="editarApePat" value="Yunca">
                    </div>
                  </div>
				 
				        <div class="form-group">
                    <label for="editarApeMat" class="col-sm-2 control-label">Apellido Materno</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="editarApeMat" name="editarApeMat" value="Zegarra" >
                    </div>
				          	<label for="editarDni" class="col-sm-2 control-label">Dni</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="editarDni" name="editarDni" maxlength="8" value="72802398" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="editarTel" class="col-sm-2 control-label">Teléfono</label>

                    <div class="col-sm-4">
                     <input type="text" class="form-control" id="editarTel" name="editarTel" value="922086029">
                    </div>
					
					           <label for="editarUsuario" class="col-sm-2 control-label">Usuario</label>

                    <div class="col-sm-4">
                     <input type="text" class="form-control" id="editarUsuario" name="editarUsuario" value="YunZeg" maxlength="100" readonly >
                    </div>
					
					
                  </div>

                   <div class="form-group">
                    <label for="editarPassword" class="col-sm-2 control-label">Nueva Contraseña</label>

                    <div class="col-sm-4">
          						<div class="input-group">
          						  <div class="input-group-addon">
          							<i class="fa fa-lock"></i>
          						  </div>
          						  <input type="text" class="form-control" id="editarPassword" name="editarPassword" >
          						</div>
                    </div>
					         <label for="editarEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-4">
          						<div class="input-group">
          						  <div class="input-group-addon">
          							<strong>@</strong>
          						  </div>
          						  <input type="text" class="form-control" id="editarEmail" name="editarEmail" value="carlosyunca62@gmail.com">
          						</div>
                    </div>
					
					
                  </div>

               
                  <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">Imagen</label>

                    <div class="col-sm-6">
                      <input type="file"class="nuevaFoto" name="editarFoto">
                      <p class="help-block">Peso máximo de la foto 2 MB</p>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                      <button type="submit" class="btn btn-primary actualizar_datos">Guardar datos</button>
                    </div>
                  </div>
               
              </div>
            
			  
            </div>
            
          </div>
		    </form>
      </div>
        
    </div>
     
  </section>
</div>