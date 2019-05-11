
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
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#modal-new-algo" ><i class="fas fa-plus"></i> Agregar Algo</button>
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
                                <h4 class="card-title">INICIO</h4>
                                    

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




   
        
        <!-- modal content -->
        <div id="modal-new-algo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <b><h4 class="modal-title">FORMULARIO DE ESTUDIANTES</h4></b>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>   
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="control-label">Nombres:</label>
                                <input type="text" class="form-control" id="txtNombres" name="txtNombres" placeholder="Ingresar Nombres">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Apellidos:</label>
                                <input type="text" class="form-control" id="txtApellidos" name="txtApellidos" placeholder="Ingresar Apellidos">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">   
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal -->
         
