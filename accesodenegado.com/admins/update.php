<title>accesodenegado - base de datos Exploits</title>
<link href="scripts/acceso.css" rel="stylesheet" type="text/css">
<script src="scripts/accesodenegado.js"></script>
<body bgcolor="#999999" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php
include "../cabecera.ad";
include ("inc/funciones.php");

$directori_exploits="bbdd/exploits/";


//aqui podrian ejecutar codigo siempre que supieran el nombre de estas dos variables, pero como a este script solo pueden llegar los admins no haremos ningun chequeo especial, solo el de quitar ";", ">", ">>" y "|" por si acaso:
$url_exploit_bbdd=trim(`/bin/echo $url_exploit_bbdd|/bin/grep -v ";"|/bin/grep -v ">"|/bin/grep -v ">>"|/bin/grep -v "|"`);
$url_exploit_en_si=trim(`/bin/echo $url_exploit_en_si|/bin/grep -v ";"|/bin/grep -v ">"|/bin/grep -v ">>"|/bin/grep -v "|"`);

$tipo=trim(`/bin/grep tipo $url_exploit_bbdd|/bin/awk {'print $2'}`);
$target=trim(`/bin/grep objetivo $url_exploit_bbdd|/bin/awk {'print $NF'}|/bin/sed s/objetivo://`);
$targetversion=trim(`/bin/grep version $url_exploit_bbdd|/bin/awk {'print $NF'}|/bin/sed s/version://`);
$SO=trim(`/bin/grep SO $url_exploit_bbdd|/bin/awk {'print $2'}`);
$versionSO=trim(`/bin/grep SO $url_exploit_bbdd|/bin/awk {'print $3'}`);
$arquitectura=trim(`/bin/grep arquitectura $url_exploit_bbdd|/bin/awk {'print $2'}`);
$lenguaje=trim(`/bin/grep lenguaje $url_exploit_bbdd|/bin/awk {'print $2'}`);
$LastModified=trim(`/bin/grep Última $url_exploit_bbdd|/bin/awk {'print $3" "$4" "$5" "$6" "$7'}`);
$lineasComentario--;
$comentario=trim(`/bin/grep -A$lineasComentario comentario $url_exploit_bbdd|/bin/sed s/^comentario://`);
$url_completa=$directori_exploits.$url_exploit_en_si;
$descargar=trim(`/bin/grep descargar $url_exploit_bbdd`);
$remoto=trim(`/bin/grep remoto $url_exploit_bbdd|/bin/awk {'print $2'}`);
if (strcmp($remoto,"sí")==0) $remoto=0; else $remoto=1;

//die ("*$arquitectura*$url_exploit_bbdd*");

?>
  <tr> 
    <td width="30%" bgcolor="#999999">
    </td>
    <td width="70%" bgcolor="#999999" class="textBold">Modificador de exploits</td>
    <td bgcolor="#999999"><img src="../ima/logoweb2.gif" width="119" height="43"></td>
  </tr>
  <tr> 
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#999999" class="text">
<form ACTION="meter_exploit.php" METHOD=POST>
	<input type="hidden" name="update" value=0>
        <table width="0%" border="0" cellpadding="0" cellspacing="0">
          <tr class="text"> 
            <td>Tipo de exploit:</td>
            <td>
		<? ImprimeTipos($tipo) ?>
	    </td>
          </tr>
          <tr class="text"> 
            <td>objetivo (demonio,etc.)</td>
            <? echo "<td><input type=text name=target value=\"$target\"><td>" ?>
          </tr>
          <tr class="text"> 
            <td>versión del objetivo:</td>
            <? echo "<td><input type=text name=targetversion value=\"$targetversion\"><td>" ?>
          </tr>
          <tr class="text"> 
            <td>Remoto: </td>
            <td> 
              <? ImprimeRemoto ($remoto); //1=no ?>
            </td>
          </tr>
          <tr class="text"> 
            <td>SO: </td>
            <td> 
              <? ImprimeSO($SO) ?>
            </td>
          </tr>
          <tr class="text"> 
            <td>versión del SO:</td>
            <td><? echo "<input type=text name=versionSO value=$versionSO></td>" ?>
          </tr>
          <tr class="text"> 
            <td>arquitectura del SO:</td>
            <td> 
              <? ImprimeArquitecturaSO($arquitectura); ?>
            </td>
          </tr>
          <tr class="text"> 
            <td>lenguaje: </td>
            <td> 
              <? ImprimeLenguaje($lenguaje) ?>
            </td>
          </tr>
          <tr class="text"> 
            <td>exploit: </td>
            <td><? echo "$descargar" ?><td><td><? echo "<a href=\"browse.php?url_exploit_bbdd=$url_exploit_bbdd&url_exploit_en_si=$url_exploit_en_si&SO=$SO&target=$target&targetversion=$targetversion\">cambiarlo</a>" ?>
          </tr>
          <tr class="text">
            <td>comentario:</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <br>
        <? echo "<textarea rows=10 name=comentario cols=70>$comentario</textarea>" ?><br>
        <? echo "<input type=\"hidden\" name=\"userfile_name\" value=\"$url_exploit_en_si\">" ?>
        <? echo "<input type=\"hidden\" name=\"url_exploit_bbdd\" value=\"$url_exploit_bbdd\">" ?>

          <input type ="submit" name="intro" value="introducir">
          
        <input type ="reset" value="restaurar">
 
</form>
	
	
	</td>
    <td bgcolor="#999999">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#999999" class="text">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
  </tr>
</table>


