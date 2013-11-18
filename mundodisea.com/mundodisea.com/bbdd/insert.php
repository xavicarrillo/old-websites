<?php
include 'capcelera.php';

$link= mysql_connect("localhost","mundodisea","athi3") or die ("no puc conectar a localhost :(");
//echo "<b>conexio a localhost realitzada</b><br>";
mysql_select_db("mundodisea_db", $link) or die ("no puc conectar a la base de dades");
//echo "<b>mundodisea_db accedida</b><br>";
/*
$result = mysql_query("SELECT * FROM tema", $link) or die ("no puc fer la query");
print "<b>query realitzada</b>";
*/

echo "
 <form method=\"post\" action=\"meterdatos.php\">
tema: <br>
 <select name=\"idtema\">
";
$temes=mysql_query("SELECT * FROM tema order by tema",$link) or die ("no puc pillar els temes");
while ($caca=mysql_fetch_row($temes)) {
    echo"
     <option value=\"$caca[0]\">$caca[1]</option>
    ";
}
echo "
     </select><br><br>

Comanda: <br>
	 <textarea rows=\"1\" name=\"comanda\" cols=\"60\"></textarea><br><br>
 Comentari: <br>
	 <textarea rows=\"4\" name=\"comentari\" cols=\"60\"></textarea><br><br>
	 <input type =\"submit\" name=\"enviar\" value=\"OK\">
	 <input type=\"reset\" value=\"borra\" name=\"boto2\">
</form>
";


?>
</body>
</html>
