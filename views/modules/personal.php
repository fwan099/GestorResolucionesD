	
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        Gestor de Personal
      </h3>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
      	<div class="box-header with-border">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RegistrarPersonal">
           Registrar Personal
          </button>
        </div>
        <div class="box-body py-3" style="overflow: auto;">
          <table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombres</th>
			      <th scope="col">Apellidos Paterno</th>
			      <th scope="col">Apellido Materno</th>
			      <th scope="col">D.N.I.</th>
			      <th scope="col">Editar</th>
			      <th scope="col">Eliminar</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>FREDDY WALTER</td>
			      <td>HUAYNAPATA</td>
			      <td>UCHARICO</td>
			      <td>73744393S</td>
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


<!-- Modal crar personal -->
<div class="modal fade" role="dialog" id="RegistrarPersonal">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registrar Personal</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <h5>Nombres</h5>
                <input type="text" class="form-control " name="nombresN" required>
              </div>
              <div class="form-group">
                <h5>Apellido Paterno</h5>
                <input type="text" class="form-control " name="nombresN" required>
              </div>
              <div class="form-group">
                <h5>Apellido Materno</h5>
                <input type="text" class="form-control " name="nombresN" required>
              </div>
              <div class="form-group">
                <h5>DNI</h5>
                <input type="text" class="form-control " name="nombresN" required>
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