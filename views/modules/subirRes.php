	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        Gestor de Resolucion
      </h3>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RegistrarPersonal">
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