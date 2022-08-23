	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4 class="fw-bold text-danger">
        <b>Busqueda de Resolucion Directoral</b>
      </h4>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header row justify-content-center">

          <form method="post" role="form" enctype="multipart/form-data" class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 bg-search p-3 rounded">
            <div class="d-flex mb-2 justify-content-center">
              <div class="form-check w-25">
                <input class="form-check-input" type="radio" name="tipo-buscar" id="flexRadioDefault1" value="DNI">
                <label class="form-check-label" for="flexRadioDefault1">
                  DNI
                </label>
              </div>
              <div class="form-check w-25">
                <input class="form-check-input" type="radio" name="tipo-buscar" id="flexRadioDefault2" value="Numero" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Numero
                </label>
              </div>
            </div>
            <div class="form-group mb-2">
                <input type="text" class="form-control form-control-sm " name="consultaN" id="consultaN" autocomplete="off" >
            </div>
            <div class="form-group mb-2">
                <h6>Año</h6>
                <select class="form-select form-select-sm"  name="añoN" >

                  <?php 
                      echo "<option value='0'>Todo</option>";
                      for($i=2012;$i<=date("Y");$i++)
                        {
                            echo "<option value='".$i."'>".$i."</option>";
                        }
                   ?>
                </select>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class=" mx-auto btn btn-primary btn-sm">Consultar</button>
            </div>
             
          </form>
          
        </div>  
        <div class="box-body py-3" style="overflow: auto;">
          <table class="table">
			  <thead>
			    <tr class="text-center">
			      <th scope="col">Item</th>
			      <th scope="col">Numero</th>
			      <th scope="col">Fecha</th>
			      <th scope="col">Motivo</th>
            <th scope="col">Usuario</th>
            <th scope="col">Documento</th>
			    </tr>
			  </thead>
			  <tbody>
			  <!--  <tr>
			      <th scope="row">1</th>
			      <td>Admin</td>
			      <td>321</td>
			      
			    </tr>-->
          <?php

            $verC = new consultaC();
            $verC->VerconsultaC();
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