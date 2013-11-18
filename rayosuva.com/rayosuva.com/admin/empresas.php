<html>

<head>
        <title>RAYOSUVA.COM - panel de control de categorías</title>
        <style>
                A:HOVER{color:#050E53}
                A{text-decoration:none;}
        </style>
</head>

 <body bgcolor="#33669" text="white" link="white" vlink="white" alink="white">


<?
include "menu.php";
$colorTaula="#33669";
$colorTitols="black";

$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");
$result = mysql_query("SELECT * FROM empresa order by fecha", $link) or die ("no puc fer la query");


$registres=mysql_num_rows($result);
 echo "<center> <br><br><p> Se han encontrado <b>$registres</b> empresas<br><br> <br><br> ";

while ($empresa=mysql_fetch_row($result)) {
   $categories=mysql_query("SELECT * FROM categoria where idcategoria='$empresa[5]'",$link) or die ("no puc pillar les categories");
   while ($cat=mysql_fetch_row($categories)) {    $categoria=$cat[1]; }

 echo "
 <table border=\"0\" bgcolor=\"white\">
        <td bgcolor=\"white\">
                <table border=\"0\" cellspacing=\"2\" cellpadding=\"5\">



<tr><td bgcolor=\"$colorTaula\"> <font face =\"Arial\" size =\"+0\" color=\"$colorTitols\"> <b>Título:  <font color=\"white\">$empresa[1]</b></font>
 <tr><td  bgcolor=\"$colorTaula\"> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\" color=\"$colorTitols\">url: <a href=\"$empresa[2]\" target=\"_blank\"> <font color=\"white\">$empresa[2]</a>
 <tr><td  bgcolor=\"$colorTaula\"> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\" color=\"$colorTitols\">eslógan:  <font color=\"white\">$empresa[3]
 <tr><td bgcolor=\"$colorTaula\"> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\" color=\"$colorTitols\">descripción:  <font color=\"white\">$empresa[4]
 <tr><td bgcolor=\"$colorTaula\"> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\" color=\"$colorTitols\">categoría:  <font color=\"white\">$categoria
 <tr><td bgcolor=\"$colorTaula\"> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\" color=\"$colorTitols\">dirección:  <font color=\"white\">$empresa[6]
 <tr><td bgcolor=\"$colorTaula\"> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\" color=\"$colorTitols\">teléfono:  <font color=\"white\">$empresa[7]
 <tr><td bgcolor=\"$colorTaula\"> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\" color=\"$colorTitols\">fax:  <font color=\"white\">$empresa[8]
 <tr><td bgcolor=\"$colorTaula\"> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\" color=\"$colorTitols\">ciudad:  <font color=\"white\">$empresa[9]
 <tr><td bgcolor=\"$colorTaula\"> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\" color=\"$colorTitols\">provincia:  <font color=\"white\">$empresa[10]
 <tr><td bgcolor=\"$colorTaula\"> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\" color=\"$colorTitols\">código postal:  <font color=\"white\">$empresa[11]
 <tr><td bgcolor=\"$colorTaula\"> <font face =\"Verdana\" size =\"-1\" color=\"$colorTitols\">Nombre de contacto:  <font color=\"white\">$empresa[12]
 <tr><td bgcolor=\"$colorTaula\"> <font face =\"Verdana\" size =\"-1\" color=\"$colorTitols\">Mail:<a href=mailto:$empresa[13]>  <font color=\"white\">$empresa[13]</a>
 <tr><td bgcolor=\"$colorTaula\"> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\" color=\"$colorTitols\"> Fecha inscripción: <font color=\"white\">$empresa[14]

 <tr><td bgcolor=$colorTaula> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\" color=\"$colorTitols\">Password: <font color=\"white\">$empresa[16]

 <tr><td bgcolor=$colorTaula> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\" color=\"$colorTitols\">Tarjeta de Crédito: <font color=\"white\">$empresa[18]

 ";

 if ($empresa[17]==0) { 
  echo "<tr><td><font face =\"Verdana\" size =\"-1\">La empresa <b>sí</b> está dada de alta en el buscador ";
 } else {
   echo "<tr><td bgcolor=\"$colorTaula\"><font face =\"Verdana\" size =\"-1\">La empresa <font color=\"red\">no</font> está dada de alta en el buscador ";
 }

echo "
 <tr><td bgcolor=\"$colorTaula\"> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">
    <a href=\"./update.php?idempresa=$empresa[0]&alta=$empresa[17]&categoria=$categoria&idcategoria=$empresa[5]\">modificar empresa</a>
 <tr><td bgcolor=\"$colorTaula\"> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">
    <a href=\"./borrar.cgi.php?idempresa=$empresa[0]&logo_path=$empresa[15]\">borrar empresa</a>
 </table>
<tr><td  bgcolor=\"$colorTaula\" align=center valign=\"center\">
	<table border=\"0\"> <tr> <td  align=\"left\" bgcolor=\"$colorTaula\"> <img src=$empresa[15]>
		<td  bgcolor=\"$colorTaula\" align=\"center\"><a href=\"./cambiar-logo.php?idempresa=$empresa[0]&titulo=$empresa[1]\">cambiar logo</a>
	</table>
</table>


 <br><br><br>
";
    
}


?>
