
<!DOCTYPE html >
<html lang="es" >
<?php 
include  '../inc/confi.sistema.php';
include  RUTA_SISTEMA . 'inc/header_sistema.php';
?>
 <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
		<?php
		include  RUTA_SISTEMA . 'inc/barra_top.php';

		include  RUTA_SISTEMA . 'inc/menu_left.php';
		include  RUTA_SISTEMA . 'inc/cuerpo_pagina.php';
		 
		include  RUTA_SISTEMA . 'inc/pie_pagina.php';
		include  RUTA_SISTEMA . 'inc/configuracion_menu_derecho.php';
		?>
		<div class="control-sidebar-bg"></div>
        </div>

	<?php include RUTA_SISTEMA . 'inc/footer_sistema.php'; ?>
</body>
</html>
