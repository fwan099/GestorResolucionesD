	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3 class="fw-bold ">
        Gestor de Resolucion
      </h3>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RegistrarResolucion">
           Registrar Resolucion
          </button>
        </div>
        <div class="box-body py-3" style="overflow: auto;">
          <table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Numero</th>
			      <th scope="col">Motivo</th>
            <th scope="col">DNI</th>
			      <th scope="col">Fecha</th>
            <th scope="col">Documento</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>0457</td>
			      <td>SEPELIO Y LUTO</td>
            <td>73744393</td>
            <td>25-04-2022</td>
            <td><a href="#">Descargar</a></td>
			      <td><button class="btn btn-success " ><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#EditarU"></i></button></td>
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

<!-- Modal crar presolucion -->
<div class="modal fade" role="dialog" id="RegistrarResolucion">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registrar Resolucion</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <h5>Personal</h5>
                <input type="text" class="form-control " name="nombresN" required>
              </div>
              <div class="form-group">
                <h5>Numero de Resolucion</h5>
                <input type="text" class="form-control " name="nombresN" required>
              </div>
              <div class="form-group">
                <h5>Fecha</h5>
                <input type="date" class="form-control " name="nombresN" required>
              </div>
              <div class="form-group">
                <h5>Motivo </h5>
                <input type="text" class="form-control " name="nombresN" required>
              </div>
              <div class="form-group">
              <h5>Documento</h5>
              <input type="file" name="documentoN">
              <p class="help-block">Peso máximo permitido 2MB</p>

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