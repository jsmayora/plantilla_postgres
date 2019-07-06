<?php

//header('Content-type: text/html; charset=utf-8');
define('DS', DIRECTORY_SEPARATOR);

$servidor = "http://localhost";     
//$servidor = "http://sistemve.com";
$sistema = "html/plantilla_postgres";

$nombre_sistema = "plantilla_jmayora";

//variables del copyright
$anio = date("Y");
$ente = "Sistema desarrollado por los ingenieros Gustavo y José Mayora";


// echo "Esta es la barra separadora " . DS ."<BR>";
define('RUTA_SISTEMA', str_replace('inc' . DS,'',dirname(__FILE__).DS));
// echo "Esta es la ruta del sistema ". RUTA_SISTEMA;
?>
