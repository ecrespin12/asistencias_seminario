
        <!-- Page wrapper  -->
        <div class="page-wrapper">

            <!-- Container fluid  -->
            <div class="container-fluid">
          
                <!-- Barra lateral y right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">SEMINARIOS</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#modal-seminario"><i class="fas fa-plus"></i> Agregar Seminario</button>
                        </div>
                    </div>
                </div>
                <!-- Fin Barra lateral y right sidebar toggle -->

                <!-- Inicio Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Listado de Seminarios</h4>
      
                                <div class="table-responsive m-t-40">
                                    <table id="tabla" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Nombre1</th>
                                                <th>Nombre2</th>
                                      
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if(!empty($listadoSeminarios)) :?>
                                            <?php foreach($listadoSeminarios as $seminario):?>
                                                <tr>
                                                    <td><?php echo $seminario->nombre1; ?></td>
                                                    <td><?php echo $seminario->nombre2; ?></td>
                                                </tr>
                                            <?php endforeach;?>  
                                            <?php endif;?> 
                                        </tbody>
                                    </table>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Fin PAge Content -->
 
            </div>
            <!-- Fin Container fluid  -->
        </div>
        <!-- Fin Page wrapper  -->




          <!-- modal form -->
        <div class="modal fade" id="modal-seminario">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Titulo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  
                </div>
                <div class="modal-body">        
                    
                <form class="mt-4" name="" method="POST">
                    <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" class="form-control"  placeholder="Ingrese Nombre">
                       
                    </div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" placeholder="Ingrese Apellidos">
                    </div>
     
                    <div class="form-row">
                          <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>               
                          </div>
                      </div>
                                   
                </form>
                                    
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
