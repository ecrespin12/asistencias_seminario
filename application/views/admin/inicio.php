 <!-- Page wrapper  -->
 <div class="page-wrapper">

<!-- Container fluid  -->
<div class="container-fluid">

    <!-- Barra lateral y right sidebar toggle -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">INICIO</h4>
        </div>
    </div>
    <!-- Fin Barra lateral y right sidebar toggle -->

    <!-- Inicio Page Content -->
    <div class="row">
        <div class="col-12 align-items-center">
                <!-- inicio todo el html aqui  -->
                <div class="row d-flex">
                    <div class="col-lg-6"> 
                        <div class="card">
                            <div class="card-body">
                                <br/>
                                <div class="row">
                                    <br/>
                                    <div class="col-md-12">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h2><i class="icon-note"></i></h2>
                                                <p class="text-muted">ESTUDIANTES</p>
                                            </div>
                                            <div class="ml-auto">
                                                <?php if(!empty($CountEstudiantes)): ?>
                                                    <h1 class="counter text-purple"><?php echo count($CountEstudiantes);?></h1>
                                                <?php endif;?> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>                                 
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6"> 
                        <div class="card">
                            <div class="card-body">
                                <br/>
                                <div class="row">
                                    <br/>
                                    <div class="col-md-12">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h2><i class="icon-note"></i></h2>
                                                <p class="text-muted">SEMINARIOS</p>
                                            </div>
                                            <div class="ml-auto">
                                                <?php if(!empty($CountSeminarios)): ?>
                                                    <h1 class="counter text-purple"><?php echo count($CountSeminarios);?></h1>
                                                <?php endif;?> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-6"> 
                        <div class="card">
                            <div class="card-body">
                                <br/>
                                <div class="row">
                                    <br/>
                                    <div class="col-md-12">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h2><i class="icon-note"></i></h2>
                                                <p class="text-muted">INSCRITOS</p>
                                            </div>
                                            <div class="ml-auto">
                                                <?php if(!empty($CountInscripciones)): ?>
                                                    <h1 class="counter text-purple"><?php echo count($CountInscripciones);?></h1>
                                                <?php endif;?> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>                                 
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6"> 
                        <div class="card">
                            <div class="card-body">
                                <br/>
                                <div class="row">
                                    <br/>
                                    <div class="col-md-12">
                                        <div class="d-flex no-block align-items-center">
                                            <div>
                                                <h2><i class="icon-note"></i></h2>
                                                <p class="text-muted">ENCARGADOS</p>
                                            </div>
                                            <div class="ml-auto">
                                                <?php if(!empty($CountUsuarios)): ?>
                                                    <h1 class="counter text-purple"><?php echo count($CountUsuarios);?></h1>
                                                <?php endif;?>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin todo el html aqui  -->
                
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

