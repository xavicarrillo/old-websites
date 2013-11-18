<?php

$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");

$result = mysql_query("SELECT * FROM empresa where idempresa='$idempresa' ") or die ("error: no puedo seleccionar las empresas de la base de datos");

  while ($empresa=mysql_fetch_row($result)) {

        $titulo=$empresa[1];
        $url=$empresa[2];
        $eslogan=$empresa[3];
        $descripcion=$empresa[4];
        $direccion=$empresa[6];
	$tel=$empresa[7];
        $fax=$empresa[8];
	$ciudad=$empresa[9];
        $provincia=$empresa[9];
        $cp=$empresa[11];
        $email=$empresa[13];
	$logo=$empresa[15];

  }
	

$result2 = mysql_query ("select * from categoria where idcategoria='$idcat'") or die ("sux");

  while ($categoria=mysql_fetch_row($result2)) {
        $nom_categoria=$categoria[1];
  }

echo "
	<html>
	<head>

	<title>$titulo</title>
";

?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<style>

A:HOVER{color:#050E53}
A{text-decoration:none;}
	
</style>

<body bgcolor="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#000066">
<div align="center"> <br>
<table width="450" border="0" cellspacing="1" cellpadding="3">

<?php 
echo "
	<tr bgcolor=\"#050E53\"> <td colspan=\"3\"> <div align=\"center\"><font face=\"Arial, Helvetica, sans-serif\" size=\"2\"><b><font color=\"#FFFFFF\" size=\"5\">$titulo</font></b></font></div>
	</td>
	</tr>
";
?>

<tr bgcolor="#8286A9"> <td colspan="3"> <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><b></b></font></div>
<div align="center"><font face="Arial, Helvetica, sans-serif"><b><font size="2" color="#FFFFFF">

<? echo "$eslogan"; ?>

</font></b></font></div>
</td>
</tr>

<? echo " <tr> <td width=\"175\"><img src=\"$logo\" width=\"175\" height=\"100\" border=\"0\" alt=\"$title\"></td> "; ?>

<td colspan="2" bgcolor="#CDCFDD" align="left" valign="top"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#050E53">

<? echo "$descripcion  <br>"; ?>

</tr>
<tr> <td rowspan="3" valign="middle" align="center" height="25" width="175" bgcolor="#CDCFDD"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#050E53">

<? echo "$direccion<br> $cp $ciudad ($provincia)<br> Tel. $tel<br>Fax. $fax"; ?>

</font></td>
<center>
<td width="27" height="25" valign="middle" bgcolor="#050E53" align="center"><img src="images/web.gif" width="21" height="11"></td>
<td width="225" height="25" valign="middle" bgcolor="#8286A9"> 

<? echo "<a target=\"_blank\" href=\"$url\"><b><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"1\"><center>$url"; ?>

</font></b></a></td>
</tr>
<tr> <td width="27" bgcolor="#050E53" valign="middle" height="25" align="center"> <div align="center"><img src="images/correo.gif" width="12" height="11"></div>
</td>
<td width="225" bgcolor="#8286A9" valign="middle" height="25"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">

<? echo "<a href=\"mailto:$email\"><b><center>$email</b></a>"; ?>

</font></td>
</tr>
<tr> <td width="27" bgcolor="#050E53" valign="middle" height="25" align="center"><img src="images/cerrar.gif" width="9" height="11"></td>
<td width="225" bgcolor="#8286A9" valign="middle" height="25"><b><center>&nbsp;<font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="javascript:window.close()">Cerrar 
        ventana</a></font></b></td>
</tr>
</table>
<p><br>
<br>
<br>
<br>
</p>
</div>
</body>
</html>


