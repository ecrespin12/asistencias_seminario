<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- navegador responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/build/images/favicon.png">
    <title>Seminarios UTEC | Inicio</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 
    <link href="<?php echo base_url();?>assets/template/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/template/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/sweetAlert/sweetalert.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/dropify/dist/css/dropify.min.css">
    
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/build/css/style.min.css" rel="stylesheet">
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-default fixed-layout">
    <!-- Preloader - estilos que puede encontrarse en spinners.css -->
     <div class="preloader">
         <div class="loader">
             <div class="loader__figure"></div>
             <p class="loader__label">Seminarios UTEC</p>
         </div>
     </div>
       
    <!-- Main wrapper - estilo que puede encontrarse en pages.scss -->
    <div id="main-wrapper">
       
        <!-- Topbar header - estilo que puede encontrarse en pages.scss -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
           
                <!-- inicio logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon -->
                        <b>
                            <img src="<?php echo base_url();?>assets/build/images/logo-utec.png" alt="homepage" class="dark-logo" />
                            <img src="<?php echo base_url();?>assets/build/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            <img src="<?php echo base_url();?>assets/build/images/logo-utec-text2.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="<?php echo base_url();?>assets/build/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span> 
                    </a>
                </div>
                <!-- fin logo -->
                    
                <div class="navbar-collapse">
            
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    </ul>   
                    
                    <ul class="navbar-nav my-lg-0">
                     
                        <!-- Inicio Notificaciones -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notificaciones</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- notificaion1 -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                <h5>Notificacion 1</h5> <span class="mail-desc">Mensaje 1</span> <span class="time">9:30 AM</span> </div>
                                             </a>
                                            <!-- notificacion2 -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                <h5>Notificacion 2</h5> <span class="mail-desc">Mensaje 2</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- notificacion3 -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                <h5>Notificacion 3</h5> <span class="mail-desc">Mensaje 3</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- notificacion4 -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                <h5>Notificacion 4</h5> <span class="mail-desc">Mensaje 4</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Mostrar todas las notificaciones</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>  
                        <!-- Fin Notificaciones -->
                        
                        <!-- Inicio Usuario Perfil-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-user"> </i>
                               <small>Juan Perez Reyes</small>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>                                        
                                    <li>
                                        <div class="message-center">         
                                            <!-- opcion1 -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                <h5>Mi Perfil</h5> </div>
                                            </a>
                                            <!-- opcion2 -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                <h5>Cambiar Contraseña</h5> </div>
                                            </a>
                                            <!-- opcion3 -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                <h5>Cerrar Sesion</h5>  </div>
                                            </a>
                                        </div>
                                    </li>                                  
                                </ul>
                            </div>
                        </li>  
                        <!-- Fin Usuario Perfil -->
                    </ul>
                </div>
            </nav>
        </header>    
        <!-- Fin Topbar header -->