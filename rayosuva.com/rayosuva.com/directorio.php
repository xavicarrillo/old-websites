<?php

$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");
$result = mysql_query("SELECT * FROM categoria order by nom", $link) or die ("no puc fer la query");

$result=mysql_query("select * from categoria where nivell=0 order by nom",$link);
$x=0;

echo "<center><table border=\"0\" cellspacing=\"5\"  bgcolor=\"#7f0375\"><tr>";

while ($cat=mysql_fetch_row($result)) {

  if ($x % 2==0) {echo "<tr><tr> <td width=45% valign=top align=\"left\">";} //xequejem si el nivell ja no es 0 i la x es imparell llavors <tr>
	else { echo "<td width=45% valign=top align=\"right\">";}
  
   echo "<FONT FACE=\"Verdana, Helvetica, Arial\" SIZE=5>
	 <B><a href=\"directorio.cgi.php?idcat=$cat[0]\">$cat[1]</a></B><br>";

   //ara pillem totes les subcategories;

  $query2=mysql_query("select * from subcategoria where idpare='$cat[0]' order by nom");
  while ($sub=mysql_fetch_row($query2)) {
   echo "<FONT FACE=\"Verdana, Helvetica, Arial\" SIZE=2><a href=\"directorio.cgi.php?idcat=$sub[2]\"><p>$sub[1]  <p></a>";
  }

  $x++; //una categoria principal mes, a la que portem dos fem una nova linea
}


echo "</table>";

?>
