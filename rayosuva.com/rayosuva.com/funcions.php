<?
function data_castella() {
$today = getdate();
$mes = $today['month'];
$dia = $today['mday'];
$any = $today['year'];
if ($mes=="January") { $mes="Enero";}
if ($mes=="February") {$mes="Febrero";}
if ($mes=="March") {$mes="Marzo";}
if ($mes=="April") {$mes="Abril";}
if ($mes=="May") {$mes="Mayo";}
if ($mes=="June") {$mes="Junio";}
if ($mes=="July") {$mes="Julio";}
if ($mes=="August") {$mes="Agosto";}
if ($mes=="September") {$mes="Septiembre";}
if ($mes=="October") {$mes="Octubre";}
if ($mes=="November") {$mes="Noviembre";}
if ($mes=="December") {$mes="Diciembre";}
$fecha=$dia." de ".$mes." del ".$any;
return $fecha;
}
?>
