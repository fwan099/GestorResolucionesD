	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestor de Personal
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
      	<div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#CrearUsuarios">Registrar Personal</button>
        </div>
        <div class="box-body" style="overflow: auto;">
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