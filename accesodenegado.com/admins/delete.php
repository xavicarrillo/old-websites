<title>accesodenegado - base de datos Exploits </title>
<link href="scripts/acceso.css" rel="stylesheet" type="text/css">
<body bgcolor="#999999" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<? include "../cabecera.ad" ?>
  <tr> 
    <td width="30%" bgcolor="#999999">&nbsp;</td>
    <td width="70%" bgcolor="#999999" class="textBold">Borrar exploits</td>
    <td bgcolor="#999999"><img src="../ima/logoweb2.gif" width="119" height="43"></td>
  </tr>
  <tr> 
    <td bgcolor="#999999">&nbsp;</td>
    <td align="center" valign="middle" bgcolor="#999999" class="text"><br>
      <br>
<?php
	unlink ("$url_exploit_bbdd") or die ("<span class=text><br>no se ha podido borrar el archivo de la base de datos</span><br><br><a class=text href=\"index.php\">buscador</a>");
	unlink ("exploits/$url_exploit_en_si") or die ("<span class=text><br>no se ha podido borrar el exploit</span><br><br><a class=text href=\"index.php\">buscador</a>");
?>
	<br><center> 
	<span class=text>el exploit ha sido borrado</span><br><br>
	<a class=linksblancs href="buscar.php">buscador</a>
        <a class=linksblancs href="insert.php">añadir exploits</a>
      <div align="center"></div></td>
    <td bgcolor="#999999">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#999999" class="text">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
  </tr>
</table>


