	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4 class="fw-bold ">
        Gestor de Perfil
      </h4>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
      
        <div class="box-body" style="overflow: auto;">
          <table class="table TB">
			  <thead>
			    <tr>
			      <th scope="col">Usuario</th>
			      <th scope="col">Contraseña</th>
            <th scope="col">Rol</th>
			      <th scope="col">Editar</th>
			    </tr>
			  </thead>
			  <tbody>
			  <!--  <tr>
			      <th scope="row">1</th>
			      <td>AdminS</td>
			      <td>321</td>
			      <td><button class="btn btn-success " ><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#EditarU"></i></button></td>
			    </tr>-->

          <?php   
                $perfil = new UsuariosC();
                $perfil->VerPerfilC();
          ?>
			  </tbody>
			</table>
        </div>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>



      <!-- Modal Editar usuarios -->
<div class="modal fade" role="dialog" id="EditarU">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <h5>DNI</h5>
                <input type="text" class="form-control" id="usuarioE" name="usuarioE" required>
                <input type="hidden" id="Uid" name="Uid">
              </div>
              <div class="form-group">
                <h5>Contraseña</h5>
                <input type="text" class="form-control " id="claveE" name="claveE" required>
              </div>
              
              <div class="form-group"  style="display:none;">
                <h5>Seleccion el Rol</h5>
                <select class="form-control input-disable" name="rolE" >
                  <option id="rolE"></option>
                  <option value="Administrador">Administrador</option>
                  <option value="Buscador">Buscador</option>
                  
                </select>
                
              </div>
            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            
          </div>
          <?php 
            $actualizarU = new UsuariosC();
            $actualizarU->ActualizarUsuariosC();
         
           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>