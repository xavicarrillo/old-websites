<?php
include 'capcelera.php';

$link= mysql_connect("localhost","mundodisea","athi3") or die ("no puc conectar a localhost :(");
mysql_select_db("mundodisea_db", $link) or die ("no puc conectar a la base de dades");
$result = mysql_query("SELECT * FROM apunts where idapunt='$idapunt'", $link) or die ("no puc fer la query");

while ($columna=mysql_fetch_row($result)) {
 $comanda=$columna[2];
 $comentari=$columna[3];
}

echo"
<center>

<table border=\"0\">
<tr>
<td>
 <form method=\"get\" action=\"http://www.mundodisea.com/bbdd/update.cgi.php\">
  <input type=\"hidden\" name=\"idapunt\" value=$idapunt>
  <table border='1'>
   <table border='1'>


    <td width='60'><b>Tema:</b><td>
      <select name=\"idtema\">
";
$temes=mysql_query("SELECT * FROM tema order by tema",$link) or die ("no puc pillar els temes");
  //lo seu seria que els ordenes de forma que l'idtema corresponent al'$idapunt fos el primer
while ($caca=mysql_fetch_row($temes)) {
    echo"
     <option value=\"$caca[0]\">$caca[1]</option>
    ";
}
echo "
     </select>
    <td><input type =\"submit\" name=\"mod\" value=\"modificar taula\">
   </table>

   <table border='1'>
    <td width='60'><b>Comanda:</b><td> <textarea rows=\"1\" name=\"comanda\" cols=\"100\">$comanda</textarea><br>
   </table>

  <table border ='1'>
    <td width='60'><b>Comentari:</b><td> <textarea rows=\"1\" name=\"comentari\" cols=\"100\">$comentari</textarea>
  </table>

 </table>
</form>
</table>
</center>
";
?>
</body>
</html>

