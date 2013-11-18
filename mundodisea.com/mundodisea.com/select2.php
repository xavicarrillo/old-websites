<html>
<body>
<?php

$link= mysql_connect("localhost","mundodisea","athi3") or die ("no puc conectar a localhost :(");
mysql_select_db("mundodisea_db", $link) or die ("no puc conectar a la base de dades");
$result = mysql_query("SELECT * FROM apunts", $link) or die ("no puc fer la query");
$temes=mysql_query("SELECT * FROM tema",$link) or die ("no puc pillar els temes");

echo "<a href=\"http://www.mundodisea.com/insert.php\">inserir dades</a>";

echo"
<select name=\"proba\">
";

while ($caca=mysql_fetch_row($temes)) {
echo "
<option value=$idtema>$caca[1]</option>
";
}
echo "</select>";

while ($columna = mysql_fetch_row($result)) {
echo"
<center>
<table border=\"1\">
<tr>
<td>
 <form method=\"get\" action=\"update.php\">
  <input type=\"hidden\" name=\"idapunt\" value=$columna[0]>
  <table border='1'>
   <table border='1'>
    <td width='60'><p>Tema:</p><td> <input type= \" hidden \" name=\"tema\" cols=\"100\" value=$columna[1]><br>
    <td><input type =\"submit\" name=\"mod\" value=\"modificar taula\">
    <td><a href=\"../borrar.php?idapunt=$columna[0]\">borrar</a>
   </table>
   <table border='1'>
    <td width='60'><p>Comanda:</p><td> <textarea rows=\"1\" name=\"comanda\" cols=\"100\">$columna[2]</textarea><br>
   </table>
  <table border ='1'>
    <td width='60'><p>Comentari:</p><td> <textarea rows=\"3\" name=\"comentari\" cols=\"100\">$columna[3]</textarea>
  </table>
 </table>
</form>
</table>
</center>
";
}


echo "<a href=\"http://www.mundodisea.com/insert.php\">inserir dades</a>";
?>
</body>
</html>

