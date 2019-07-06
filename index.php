<!DOCTYPE html>
<html lang="es">
<?php 
include 'inc/confi.sistema.php';
include RUTA_SISTEMA . 'inc/header_sistema.php';

?>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html"><b><?php echo $nombre_sistema; ?></b> LTE</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Inicia sesión para iniciar tu sesión</p>

			<form action="../../index2.html" method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Usuario">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Contraseña">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					
					<!-- /.col -->
					<div class="col-xs-4 text-center">
						<button type="submit" class="text-center btn btn-primary btn-block btn-flat">Registrarse</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

			
			<!-- /.social-auth-links -->

			<a href="#">Olvidé mi contraseña</a><br>
			<a href="register.html" class="text-center">Registrar una nueva cuenta</a>

		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->
	<?php include RUTA_SISTEMA . 'inc/footer_sistema.php';?>
	<div class="control-sidebar-bg"></div>
	<!-- css-js para  login -->
	<script type="text/javascript" src="<?php echo $servidor."/".$sistema; ?>/plugins/iCheck/icheck.js"></script>
	<!-- fin de css-js para  login -->
	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' /* optional */
			});
		});
	</script>
</div>
</body>
</html>
