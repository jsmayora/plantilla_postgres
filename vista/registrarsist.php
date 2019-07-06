<!DOCTYPE html>
<html lang="es">
<?php 
include  '../inc/confi.sistema.php';
include  RUTA_SISTEMA . 'inc/header_sistema.php';

?>


<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">crear cuenta</p>

    <form action="../../index.html" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Escriba su usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Correo">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Repita la contraseña">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row ">
                <!-- /.col -->
        <div class="col-xs-4 align-items-center">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarse</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <a href="login.html" class="text-center">Ya tengo una cuenta</a>
    </div>

    
  </div>
  <!-- /.form-box -->
</div>


<?php include RUTA_SISTEMA . 'inc/footer_sistema.php';?>
<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' /* optional */
		});
	});
</script>
</body>
</html>