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
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>                                 
                                <br/>
                                <br/>
                            </div>
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