<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iniciar Sesión</title>

  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/sweetAlert/sweetalert.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/style.css">
  <style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <script src="<?php echo base_url(); ?>assets/template/sweetAlert/sweetalert.js"></script>
 
</head>

<body>
<div class="">
 <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="form-row">
        <div class="login-form ">
      
          <?php if ($this->session->flashdata("error")) : ?>   
                  <script type="text/javascript">
                      swal({
                          html: true,
                          title: "Error de Ingreso",
                          text: "<h5 class='alertMsj'>El usuario y/o contraseña es incorrecto, verifique sus datos e intente nuevamente o póngase en contacto con el administrador.</h5>",
                          type: "error",
                          confirmButtonText: "Aceptar"
                              });
                  </script>
            <?php endif; ?>
      
          <form action="<?php echo base_url(); ?>Auth/login" method="post"  class="form_SRC" data-type-form="login" autocomplete="off">
      
          <h2 class="text-center">Iniciar Sesion</h2>   
          <div class="or-seperator"><i></i></div>    
        <div class="form-group">
            <input type="text" name="usuario" class="form-control" placeholder="Ingresar Usuario" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Ingresar Contraseña" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
        </div>
        <div class="clearfix">
            
            <a href="#" class="pull-right">¿Olvido la contraseña?</a>
        </div> 
      
          </form>
         
          <p class="text-center text-muted small">Estandares de Programacion 2019, Grupo 12 <a href="#"></a></p>
        </div>
    </div>
 </div>
</div>


  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/template/bootstrap/dist/js/bootstrap.min.js"></script> -->
</body>

</html>

                               		                            