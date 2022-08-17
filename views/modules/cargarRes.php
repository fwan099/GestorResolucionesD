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

<!-- Modal crar personal -->
<div class="modal fade" role="dialog" id="RegistrarResolucion">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header d-block">
              <h5 class="modal-title text-center" id="exampleModalLabel">Registrar Resolucion</h5>
              <div class="form-group" >
                <h5>Consulta DNI</h5>
                <input type="text" class="form-control mb-3 " id="dni-buscar" >
                <button type="button" id="btn-buscar" class="btn btn-lite w-100">Buscar en RENIEC</button>
              </div>
          </div>

          <div class="modal-body">
            <div class="box-body">
              <div class="form-group mb-2">
                <h6>Nombres</h6>
                <input type="text" class="form-control " name="nombresN" id="nombresN" disabled>
              </div>
              <div class="form-group mb-2">
                <h6>Apellido Paterno</h6>
                <input type="text" class="form-control " name="paternoN" id="paternoN" disabled>
              </div>
              <div class="form-group mb-2">
                <h6>Apellido Materno</h6>
                <input type="text" class="form-control " name="maternoN" id="maternoN" disabled>
              </div>
              <div class="form-group mb-2">
                <h6>DNI</h6>
                <input type="text" class="form-control " name="dniN" id="dniN" disabled>
              </div>
              <div class="d-flex">
                <div class="form-group mb-2 w-50 me-3">
                <h6>Numero de Resolucion</h6>
                <input type="text" class="form-control " name="numeroN" required>
              </div>
              <div class="form-group mb-2 w-50">
                <h6 class="">Fecha</h6>
                <input type="date" class="form-control " name="fechaN" required>
              </div>
              </div>
              
              <div class="form-group mb-2">
                <h6>Motivo </h6>
                <input type="text" class="form-control " name="motivoN" required>
              </div>
              <div class="form-group mb-2">
              <h6>Documento</h6>
              <input type="file" name="documentoN">
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