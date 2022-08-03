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
          <table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Usuario</th>
			      <th scope="col">Contraseña</th>
            <th scope="col">Rol</th>
			      <th scope="col">Editar</th>
			      <th scope="col">Eliminar</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Admin</td>
			      <td>32A1</td>
            <td>Administrador</td>
			      <td><button class="btn btn-success" ><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#EditarU"></i></button></td>
			       <td><button class="btn btn-danger" ><i class="fa-solid fa-trash-can" data-toggle="modal" data-target="#EditarU"></i></button></td>
			    </tr>
			  
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
                <input type="password" class="form-control " name="claveN" required>
              </div>
              
              <div class="form-group">
                <h5>Seleccion el Rol</h5>
                <select class="form-control " name="rolN">
                  <option>Seleccionar rol...</option>
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
          
        </form>
        
      </div>
      
    </div>
    
  </div>