	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        Gestor de Usuarios
      </h3>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
      	<div class="box-header with-border">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CrearUsuarios">
           Crear Usuario
          </button> 
        </div>
        <div class="box-body py-3" style="overflow: auto;">
          <table class="table TB">
			  <thead>
			    <tr>
			      <th scope="col">N°</th>
			      <th scope="col">Usuario</th>
			      <th scope="col">Contraseña</th>
            <th scope="col">Rol</th>
			      <th scope="col">Editar/Eliminar</th>
			    </tr>
			  </thead>
			  <tbody>
			 <!--   <tr>
			      <th scope="row">1</th>
			      <td>Admin</td>
			      <td>32A1</td>
            <td>Administrador</td>
			      <td>
              <div class="btn-group">
                <button class="btn btn-success" ><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#EditarU"></i></button>
                <button class="btn btn-danger" ><i class="fa-solid fa-trash-can" data-toggle="modal" data-target="#EditarU"></i></button>
              </div>
            </td>
			    </tr>-->
          <?php 
                $verU = new UsuariosC();
                $verU->VerUsuariosC();

                $item = null;
                $valor = null;

                $editarU =  UsuariosC::EUsuariosC($item,$valor);

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



  <!-- Modal crar usuarios -->
<div class="modal fade" role="dialog" id="CrearUsuarios">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <h5>DNI</h5>
                <input type="text" class="form-control" name="usuarioN" required>
              </div>
              <div class="form-group">
                <h5>Contraseña</h5>
                <input type="text" class="form-control " name="claveN" required>
              </div>
              
              <div class="form-group">
                <h5>Seleccion el Rol</h5>
                <select class="form-control " name="rolN">
                  <option value="Administrador">Administrador</option>
                  <option value="Jefe de Gestion Institucional">Buscador</option>
                  
                </select>
                
              </div>
            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            
          </div>
          <?php 
            $crearU = new UsuariosC();
            $crearU->CrearUsuariosC();
           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>

  <?php 
  $borrarU = new UsuariosC();
  $borrarU->BorrarUsuariosC();
   ?>

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
              
              <div class="form-group">
                <h5>Seleccion el Rol</h5>
                <select class="form-control " name="rolE">
                  <option id="rolE"></option>
                  <option value="Administrador">Administrador</option>
                  <option value="Jefe de Gestion Institucional">Buscador</option>
                  
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