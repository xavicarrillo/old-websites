<title>accesodenegado - base de datos Exploits</title>
<script src="scripts/accesodenegado.js"></script>
<link href="scripts/acceso.css" rel="stylesheet" type="text/css">
<body bgcolor="#999999" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<? include "inc/cabecera.ad" ?>
  <tr> 
    <td width="30%" bgcolor="#999999">&nbsp;</td>
    <td width="70%" bgcolor="#999999" class="textBold">Resultados de la b&uacute;squeda</td>
    <td bgcolor="#999999"><img src="ima/logoweb2.gif" width="119" height="43"></td>
  </tr>
  <tr> 
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#999999" class="text">
<?php

$filtre_usuaris="|grep -v modificar|grep -v borrar";

if ($busqueda_x_target) {
	if (!$target) die ("El campo \"objetivo\" es obligatorio<br><a class=linksblancs href=\"javascript:history.go(-1)\">volver</a>");

	$target=trim(strtolower($target));
	$targetoriginal=$target;
	$target=preg_replace("/[\s]+/","x",$target); //si han posat espais els substituim per "x" per saltar-nos el filtre de caracters alfanumerics del if de unes linies mes abaix.

	$targetversion=trim($targetversion);
	$targetversionoriginal=$targetversion;
	$targetversion=trim(`/bin/echo $targetversion|/bin/sed s/"\."/"x"/`); //cambiem els . per x per saltar-nos el filtre de caracters alfanumerics anti-cakers

	if (!(ereg('^[[:alnum:]]+$', $target)) || (!(ereg('^[[:alnum:]]+$', $targetversion)) && (!empty($targetversion))) || !(ereg('^[[:alnum:]]+$', $SO))) die ("<center>Los campos sólo pueden contener carácteres alfanuméricos<br><br><a class=linksblancs href=\"javascript:history.go(-1)\">volver</a>");

	if (strcmp($SO,"cualquiera")==0) $SO=".";
	$target=trim(preg_replace("/[\s]+/","_",$targetoriginal));
	$command="./sabueso.sh $SO $target $targetversion".$filtre_usuaris;
//die("*$command*");

} else {

//si la busqueda no es per target es per nom
	if (!$nom) die ("El campo \"nombre\" es obligatorio<br><a class=linksblancs href=\"javascript:history.go(-1)\">volver</a>");
        $nom=trim(strtolower($nom));

	if (!(ereg('^[[:alnum:]]+$', $nom))) die ("<center>Los campos sólo pueden contener carácteres alfanuméricos<br><br><a class=linksblancs href=\"javascript:history.go(-1)\">volver</a>");

	$command="./sabueso.sh . $nom nom".$filtre_usuaris; //sabueso mirara si el 3r parametro="nom" para buscar por nombre de exploit
}

//die ("*$command*");
$output = shell_exec($command);
if (!$output) die ("<br><center>no hay ningún resultado<br><a class=linksblancs href=\"index.php\">volver</a>");
echo("<pre>$output</pre>");

//$total=`echo $output| grep objetivo |wc -l`;
	die ();
//************


//inicializamos variables para la paginación de la busqueda
if (!isset ($siguientes)) { $inicio=0; $siguientes=2; }
if (!isset($exploitsMostrats)) $exploitsMostrats=$siguientes;

echo "
<table width=50% border=0 cellspacing=0 cellpadding=0>
  <tr> 
    <td class=text>$target $targetversion</td>
  </tr>
 "; 
$inicio=$inicio+$siguientes;
ImprimeFooterSiguientes ($total,$inicio,$siguientes,$exploitsMostrats);

?>
    </td>
    <td bgcolor="#999999">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#999999" class="text">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
  </tr>
</table>


