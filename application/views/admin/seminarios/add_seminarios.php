
        <!-- Page wrapper  -->
        <div class="page-wrapper">

            <!-- Container fluid  -->
            <div class="container-fluid">
          
                <!-- Barra lateral y right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">SUBIR INFORMACION DE SEMINARIOS</h4>
                    </div>
   
                </div>
                <!-- Fin Barra lateral y right sidebar toggle -->

                <!-- Inicio Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="col-md-12 ">
                                <div class="">
                                    <a href="<?php echo base_url();?>admin/Seminario/Cargar" class="btn btn-info"><i class="fas fa-download"></i> Descargar Formato Excel</a>
                                   
                                </div>
                        
                            </div>
                            <!-- inicio todo el html aqui  -->
                               
                            <section>

//abrimos el fromulario y llamamos a la función del controlador
<form action="<?php echo base_url(); ?>admin/CargaExcel/guardarExcel" method="POST" enctype="multipart/form-data">

 //los imputs

 <div class="col-md-3">
   <div class="form-group">
     <label>Sede</label>
        <input type="text" class="form-control" id="rut_usu" 
         name="rut_usu">   
   </div>
 </div>

 <div class="col-md-3">
   <div class="form-group">
     <label>Sede</label>
        <input type="text" class="form-control" id="fecha_ini" name="fecha_ini">   
   </div>
 </div>


  <div class="col-md-3">
    <div class="form-group">
     <label>Sede</label>
        <input type="text" class="form-control" id="fecha_ter" name="fecha_ter">   
  </div>
  </div>

   <div class="col-md-3">
    <div class="form-group">
        <label>Seleccione un xlxs</label>
        <input type="file" name="file" id="file" accept=".xlsx" class="form-control" > 
     </div>
    </div>


     <div class="col-md-3" style="top:25px; left: 30px;" >
               <div class="form-group">

                   <button type="submit" id="Ingresar" name="Ingresar" class="btn bg-aqua">Guardar</button>
                    <button name="cancelar" id="cancelar" class="btn bg-red" style="width:80px;">Cancelar</button>
               </div>
           </div>
           </div>

 </form>

</section>

                            

                            <!-- fin todo el html aqui  -->
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Fin PAge Content -->
 
            </div>
            <!-- Fin Container fluid  -->
        </div>
        <!-- Fin Page wrapper  -->