<html>
<head>
        <title>RAYOSUVA.COM - panel de control de categorías</title>
        <style>
                A:HOVER{color:#f6890a}
                A{text-decoration:none;}
        </style>

 <script language="JavaScript">

  function obreFinestra(laURL,nomFinestra,parametres) { 
    window.open(laURL,nomFinestra,parametres);
  }

 </script>
 </head>

 <body bgcolor="white" text="#7f0375" link="white"  vlink="white" alink="white">

<?
include 'funcions.php';
$fecha=data_castella();
echo "
	<table border=\"1\" cellpadding=20 width=\"100%\">
		<tr><td width=\"70%\" align=\"left\">$fecha
		    <td><td><td><td><td><td>
		    <td>hola
		    <td><td><td><td><td><td>
		<td>Admin
	</table>
";
?>

<center>

<A onclick="obreFinestra('alta.php','Legal','scrollbars=yes,resizable=yes,width=495,height=655')"
HREF="#">Alta Online</A> | 

<a onclick="obreFinestra('/admin/index.php','Admin','scrollbars=yes,resizable=yes,width=495,height=655')"
HREF="#"> Admin</A>

<br>
<br>
<br>
<br>

<img src="/images/RU2.jpg"> 

<br>
<br>
<br>

<!-- inicio busqueda -->
<table border="0" cellspacing="15" cellpadding="0" bgcolor="#7f0375">
<tr>
<td>
<form name="form1" method="post" action="search.php">
<table border="0" cellspacing="2" cellpadding="2" align="center">
<tr height="8" colspan="3">
</tr>
<tr>
<td>
<div align="right"><font size="2" color="white"><b>Palabra
                                  clave:</b></font></div>
</td>
<td valign="middle">
<div align="center">
<input type="text" name="keyword" size="30">
</div>
</td>
<td valign="bottom">
<div align="left"><font size="2" face="Arial, Helvetica, sans-serif"><b>
<input type="image" name="submit" value="Buscar" src="images/lupa2.gif"></b></font></div>
</td>
</tr>
<tr valign="top">
<td colspan="3">
<div align="center"><font size="1" color="white"><a href="power_search.php3">B&uacute;squeda avanzada</a></font></div>
</td></tr></table></form></td></tr></table></td></tr></table></td></tr></table>
<br>
<br>
<br>

<!-- fin busqueda -->

<?php
include 'directorio.php';
?>

</body>
</html>
