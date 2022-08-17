	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        Gestor de Motivos de Resolucion
      </h3>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
     	<div class="box-header with-border">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RegistrarMotivo">
           Registrar Motivo
          </button>        </div>
        <div class="box-body py-3" style="overflow: auto;">
          <table class="table TB">
			  <thead>
			    <tr>
			      <th scope="col">N°</th>
			      <th scope="col">Descripcion Motivo</th>
			      <th scope="col">Editar / Eliminar</th>
			    </tr>
			  </thead>
			  <tbody>
			 <!--   <tr>
			      <th scope="row">1</th>
			      <td>SEPELIO Y LUTO UGEL</td>
			      <td>
              <div class="btn-group">
                <button class="btn btn-success" ><i class="fas fa-pencil-alt" data-bs-toggle="modal" data-bs-target="#EditarMotivo"></i></button>
                <button class="btn btn-danger" ><i class="fa-solid fa-trash-can" data-toggle="modal" data-target="#EditarU"></i></button>
              </div>
            </td>
			    </tr>-->
          <?php 

            $verM = new MotivosC();
            $verM->VerMotivosC();

            $item = null;
            $valor = null;

            $editarM =  MotivosC::EMotivosC($item,$valor);
          
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



<!-- Modal crar Motivo -->
<div class="modal fade" role="dialog" id="RegistrarMotivo">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registrar Motivo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <h5>Motivo</h5>
                <input type="text" class="form-control " name="motivoN" required style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
              </div>

            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            
          </div>
            <?php 
            $crearM = new MotivosC();
            $crearM->CrearMotivosC();
           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>
  <?php 
  $borrarM = new MotivosC();
  $borrarM->BorrarMotivosC();
   ?>

<!-- Modal Editar Motivo -->
<div class="modal fade" role="dialog" id="EditarM">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" role="form" enctype="multipart/form-data">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Motivo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <h5>Motivo</h5>
                <input type="text" class="form-control " id="motivoE" name="motivoE" required style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();">
                <input type="hidden" id="Uid" name="Uid">
              </div>

            </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Gurdar Cambios</button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            
          </div>
           <?php 
            $actualizarM = new MotivosC();
            $actualizarM->ActualizarMotivosC();
         
           ?>
          
        </form>
        
      </div>
      
    </div>
    
  </div>