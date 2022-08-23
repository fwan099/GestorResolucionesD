 <?php 

if ($_SESSION["rol"] != "Administrador") {

  echo '<script>
        window.location ="inicio"

  </script>';
  
}


 ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4 class="fw-bold ">
        Gestor de Resolucion
      </h4>
     
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
          <table class="table TB " id="resoluciones-table">
        <thead>
          <tr class="text-center">
            <th scope="col">N° Resolucion</th>
            <th scope="col">Fecha</th>
            <th scope="col">Motivo</th>
            <th scope="col">DNI</th>
            <th scope="col">Propietario</th>
            
            <th scope="col">Documento</th>
            <th scope="col">Editar / Eliminar</th>
          </tr>
        </thead>
        <tbody>
        <!--  <tr>
            <th scope="row">1</th>
            <td>0457</td>
            <td>SEPELIO Y LUTO</td>
            <td>73744393</td>
            <td>25-04-2022</td>
            <td><a href="#">Descargar</a></td>
            <td>
              <div class="btn-group">
                <button class="btn btn-success" ><i class="fas fa-pencil-alt" data-bs-toggle="modal" data-bs-target="#EditarMotivo"></i></button>
                <button class="btn btn-danger" ><i class="fa-solid fa-trash-can" data-toggle="modal" data-target="#EditarU"></i></button>
              </div>
            </td>
          </tr>-->

            <?php 
                $verR = new ResolucionC();
                $verR->VerResolucionC();
                $item = null;
                $valor = null;

                $editarR =  ResolucionC::EResolucionC($item,$valor);
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

<!-- Modal crar RESOLUCION -->
<div class="modal fade" role="dialog" id="RegistrarResolucion">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header d-block">
              <h5 class="modal-title text-center" id="exampleModalLabel">Registrar Resolucion</h5>
              <div class="form-group" >
                <h5>Consulta DNI</h5>
                <input type="text" class="form-control mb-3 " id="dni-buscar" autocomplete="off" >
                <button type="button" id="btn-buscar" class="btn btn-lite w-100">Buscar en RENIEC</button>
              </div>
          </div>

          <div class="modal-body">
            <div class="box-body">
              <div class="form-group mb-2">
                <h6>Nombres</h6>
                <input type="text" class="form-control " name="nombresN" id="nombresN" autocomplete="off">
              </div>
              <div class="form-group mb-2">
                <h6>Apellido Paterno</h6>
                <input type="text" class="form-control " name="paternoN" id="paternoN" autocomplete="off" >
              </div>
              <div class="form-group mb-2">
                <h6>Apellido Materno</h6>
                <input type="text" class="form-control " name="maternoN" id="maternoN" autocomplete="off" >
              </div>
              <div class="form-group mb-2">
                <h6>DNI</h6>
                <input type="text" class="form-control " name="dniN" id="dniN" autocomplete="off" >
              </div>
              <div class="d-flex">
                <div class="form-group mb-2 w-50 me-3">
                <h6>Numero de Resolucion</h6>
                <input type="text" class="form-control " name="numeroN" required autocomplete="off">
              </div>
              <div class="form-group mb-2 w-50">
                <h6 class="">Fecha</h6>
                <input type="date" class="form-control " name="fechaN" required >
              </div>
              </div>
              
              <div class="form-group">
                <h6>Seleccionar Motivo</h6>
                <select class="form-select"  name="motivoN">
                <!--  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>-->
                  <?php 
                    $verML = new MotivosC();
                    $verML->VerMotivosListC();
                   ?>
                </select>
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
          <?php 
            $crearR = new ResolucionC();
            $crearR->CrearResolucionC();
           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>


  <?php 
  $borrarR = new ResolucionC();
  $borrarR->BorrarResolucionC();
   ?>
<!-- Modal EDITAR RESOLUCION -->
<div class="modal fade" role="dialog" id="EditarR">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header d-block">
              <h5 class="modal-title text-center" id="exampleModalLabel">Actualizar Resolucion</h5>
            <!--  <div class="form-group" >
                <h5>Consulta DNI</h5>
                <input type="text" class="form-control mb-3 " id="dni-buscar" >
                <button type="button" id="btn-buscar" class="btn btn-lite w-100">Buscar en RENIEC</button>
              </div>-->
          </div>

          <div class="modal-body">
            <div class="box-body">
              <div class="form-group mb-2">
                <h6>Nombres</h6>
                <input type="text" class="form-control " name="nombresE" id="nombresE"  >
                <input type="hidden" id="Uid" name="Uid">
              </div>
              <div class="form-group mb-2">
                <h6>Apellido Paterno</h6>
                <input type="text" class="form-control " name="paternoE" id="paternoE" >
              </div>
              <div class="form-group mb-2">
                <h6>Apellido Materno</h6>
                <input type="text" class="form-control " name="maternoE" id="maternoE" >
              </div>
              <div class="form-group mb-2">
                <h6>DNI</h6>
                <input type="text" class="form-control " name="dniE" id="dniE" >
              </div>
              <div class="d-flex">
                <div class="form-group mb-2 w-50 me-3">
                <h6>Numero de Resolucion</h6>
                <input type="text" class="form-control " name="numeroE" id="numeroE" required>
              </div>
              <div class="form-group mb-2 w-50">
                <h6 class="">Fecha</h6>
                <input type="date" class="form-control " name="fechaE" id="fechaE"required>
              </div>
              </div>
              
              <div class="form-group">
                <h6>Seleccionar Motivo</h6>
                <select class="form-select"  name="motivoE" >
                  <option id="motivoE"></option>
                <!--  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>-->
                  <?php 
                    $verML = new MotivosC();
                    $verML->VerMotivosListC();
                   ?>
                </select>
              </div>
              <div class="form-group mb-2">
              <h6>Documento</h6>
              <input type="file" name="documentoE" id="documentoE">
              <input type="hidden" name="documentoActual" id="documentoActual">
              </div>
            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Actualizar</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            
          </div>
          <?php 
            $actualizarR = new ResolucionC();
            $actualizarR->ActualizarResolucionC();
         
           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>
