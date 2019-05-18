
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

                            <?php if ($this->session->flashdata("exitoSem")) : ?>   
                  <script type="text/javascript">
                      swal({
                          html: true,
                          title: "Se subio",
                          text: "<h5 class='alertMsj'>El Excel se subio corractamente.</h5>",
                          type: "success",
                          confirmButtonText: "Aceptar"
                              });
                  </script>
            <?php endif; ?>


<form action="<?php echo base_url(); ?>admin/CargaExcel/guardarExcel" method="POST" enctype="multipart/form-data">


<center>


            <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Subir Lista de Seminario</h4>
                                <label for="input-file-now">Subir archivo excel con el listado de seminarios</label>
                                <input type="file" id="input-file-now" class="dropify" name="file" accept=".xlsx" />
                            </div>
                        </div>
            </div>



     <div class="col-md-3" style="top:25px; left: 30px;" >
               <div class="form-group">
               <input type="submit" name="Ingresar" id="Ingresar" value="Guardar" class="btn btn-primary" />
                 
               <button type="button" class="btn btn-danger" >Cancelar</button> 
                    
               </div>
           </div>
           </div>
                            </center>
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