<?php
  $user=  $this->session->userdata("usuario");
?>
   
 <!-- Left Sidebar - estilos se encuentran en sidebar.scss  -->
 <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div><img src="<?php echo base_url();?>assets/build/images/users/8.jpg" alt="user-img" class="img-circle"></div>
                        <div class="dropdown">
                            <!-- <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Miguel Reyes</a> -->
                            <span class=" u-dropdown link hide-menu"><?php echo $user;?></span>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                      
                    <?php if($user=="estudiante"):?>
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Inicio</span></a></li>
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Inscripción de Seminarios</span></a></li> 
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Seminarios Disponibles</span></a></li> 
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Comprobante Inscripción</span></a></li> 
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Cerrar Sesión</span></a></li> 
                      <?php elseif($user=="admin"):?>
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Inicio</span></a></li>
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Seminarios</span></a></li> 
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Estudiantes</span></a></li> 
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Usuarios</span></a></li> 
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Informes</span></a></li>                           
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Cerrar Sesión</span></a></li> 
                      <?php elseif($user=="encargado"):?>
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Inicio</span></a></li> 
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Registrar Asistencias</span></a></li> 
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Consultar Asistencias</span></a></li> 
                          <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu"> Cerrar Sesión</span></a></li> 
                      <?php endif;?>

                    </ul>
                </nav>
                <!-- Fin Sidebar navigation -->
            </div>
            <!-- Fin Sidebar scroll-->
</aside>        
   
        <!-- Fin Left Sidebar - estilos se encuentran en sidebar.scss  -->
