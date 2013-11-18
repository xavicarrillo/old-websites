<html>

<head>
        <title>RAYOSUVA.COM - panel de control de categorías</title>
        <style>
                A:HOVER{color:#050E53}
                A{text-decoration:none;}
        </style>
</head>

 <body bgcolor="#33669" text="white" link="white" vlink="white" alink="white">


<?php
include "menu.php";

$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");
$result = mysql_query("SELECT * FROM categoria", $link) or die ("no puc fer la query");
$numero_de_registres=mysql_num_rows($result);
echo "<center><br><br>se han encontrado <b>$numero_de_registres</b> categorías<br><br><br>

  <table border=\"0\" bgcolor=\"white\">
        <tr><td bgcolor=\"white\">
                <table border=\"0\" bordercolor=\"white\" cellspacing=\"2\" cellpadding=\"5\">
";


$colorTaula="#33669";
$colorLletres="white";

while ($columna = mysql_fetch_row($result)) {
echo"
  <td bgcolor=\"$colorTaula\" width='80' align=\"center\"><a href=\"./borrar.categoria.php?idcategoria=$columna[0]\"><font face=\"Arial\" size=\"-1\" color=\"$colorLletres\"><p>borrar</p></a>
  <td bgcolor=\"$colorTaula\" width='140' ><a href=\"./nova.subcategoria.php?idcategoria=$columna[0]&nom=$columna[1]\"><font face=\"Arial\" size=\"-1\" color=\"$colorLletres\"><p>añadir subcategoría</p></font></a>
  <td bgcolor=\"$colorTaula\" width=60% ><font face=\"Arial\" size=\"+2\" color=\"$colorLletres\"><p>$columna[1]</p></font>
<tr>
";
}
?>
</table>
</table>

</body>
</html>
