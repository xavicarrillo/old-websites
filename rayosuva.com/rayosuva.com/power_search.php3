<html>
 <head>
 <script language="JavaScript">

  function MM_openBrWindow(theURL,winName,features) { 
    window.open(theURL,winName,features);
  }

 </script>
 </head>

  <body bgcolor="blue" text="white" link="white" vlink="white" alink="white">

<?php
include 'funcions.php';
$fecha=data_castella();
echo $fecha;
?>


<center>

<A onclick="MM_openBrWindow('alta.php','Legal','scrollbars=yes,resizable=yes,width=495,height=655')"
HREF="#">Alta Online</A>

<!-- inicio busqueda avanzada -->

<table width="500" border="0" cellpadding="5">
<tr> <td colspan="3">
<form action="power_search.cgi.php" method=post>
<input type=hidden name=ps value=1>

<table border="0" cellspacing="0" cellpadding="4" width="100%">
<tr>
<td><font face="Arial" size="2">Título</font></td>
<td><input type=text name=titulo size=30></td>
</tr>
<tr>
<td><font face="Arial" size="2">Url</font></td>
<td><input type=text name=url size=30</td>
</tr>
<tr>
<td valign="top"><font face="Arial" size="2">Descripción</font></td>
<td><textarea name="descripcion" cols="30" rows="3" maxlength="255" wrap="virtual" value=""></textarea></td>
</tr>
<tr>
<td><font face="Arial" size="2">Categoría</font></td>

<?
$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar
 a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dade
s");

echo " <td><font face=\"Arial\" size=\"2\">  <select name=\"idcategoria\">  ";

$categories=mysql_query("SELECT * FROM categoria",$link) or die ("no puc pillar les categories");

while ($cat=mysql_fetch_row($categories)) {
    echo"     <option value=\"$cat[0]\">$cat[1]</option>    ";
}
?>

</tr>
<tr>
<td><font face="Arial" size="2">Contacto</font></td>
<td><input type=text name=contact size=30></td>
</tr> <tr>
<td><font face="Arial" size="2">Email</font></td>
<td><input type=text name=email size=30></td>
</tr> <tr>
<td>&nbsp;</td>
<td><input type=submit name=submit value="Buscar"></td>
</tr>
</table>
</form> </td>
</tr>
</table>
<!-- inicio busqueda avanzada -->


</body>

</html>
