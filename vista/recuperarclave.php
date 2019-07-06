<!DOCTYPE html>
<html lang="es">
<?php 
include '../inc/confi.sistema.php';
include RUTA_SISTEMA . 'inc/header_sistema.php';

?>

<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="../../index2.html"><b>Admin</b>LTE</a>
		</div>

		<div class="register-box-body">
			<p class="login-box-msg">Recuprar contraseña</p>

			<form action="../../index.html" method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Usuario">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<!-- <div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Email">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div> -->
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Contraseña nueva">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Repita la contraseña">
					<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
				</div>
				<div class="row ">
					
					<!-- /.col -->
					<div class="col-xs-4 ">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Enviar</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

			<div class="social-auth-links text-center">
				<!-- <a href="login.html" class="text-center">Ya tengo una cuenta</a> -->
			</div>


		</div>
		<!-- /.form-box -->
	</div>



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