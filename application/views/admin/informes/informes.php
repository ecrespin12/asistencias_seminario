
        <!-- Page wrapper  -->
        <div class="page-wrapper">

            <!-- Container fluid  -->
            <div class="container-fluid">
          
                <!-- Barra lateral y right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">INICIO</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                        </div>
                    </div>
                </div>
                <!-- Fin Barra lateral y right sidebar toggle -->

                <!-- Inicio Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <!-- inicio todo el html aqui  -->
                                <h4 class="card-title">INFORMES ASISTENCIA SEMINARIO</h4>
                                
                                <table id="tabla" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Fecha</th>
                                                <th>Codigo Usuario</th>
                                                <th>Codigo Inscripcion</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php if(!empty($listadoAsistenciaSeminario)): ?>	
                                                 <?php foreach($listadoAsistenciaSeminario as $seminario): ?>	
                                                    <tr>	
                                                        <td><?php echo $seminario->asistenciaID;?></td>	
                                                        <td><?php echo $seminario->horaFecha;?></td>	
                                                        <td><?php echo $seminario->usuarioID;?></td>	
                                                        <td><?php echo $seminario->inscripcionID;?></td>
                                                    </tr>	
                                                <?php endforeach;?> 	
                                            <?php endif;?>     
                          
                                        </tbody>
                                    </table>
                                 

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