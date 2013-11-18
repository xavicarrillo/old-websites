<html>
<body bgcolor="gray">
<?php

$link= mysql_connect("localhost","mundodisea","athi3") or die ("no puc conectar a localhost :(");
mysql_select_db("mundodisea_db", $link) or die ("no puc conectar a la base de dades");
$result = mysql_query("SELECT * FROM apunts", $link) or die ("no puc fer la query");

/*
echo "
<!--links-->
<center>
 <a href=\"http:/www.mundodisea.com/insert.php\"><i>inserir noves dades</i></a>
 <a href=\"http:/www.mundodisea.com\"><i>mundodisea</i></a>
</center>
<!--links-->
";
*/

while ($columna = mysql_fetch_row($result)) {
echo"
<center>

<table border=\"0\">
<tr>
<td>
 <form method=\"get\" action=\"http:/www.mundodisea.com/update.php\">
  <input type=\"hidden\" name=\"idapunt\" value=$columna[0]>
  <table border='1'>
   <table border='1'>


    <td width='60'><b>Tema:</b><td>
      <select name=\"idtema\">
";
$temes=mysql_query("SELECT * FROM tema",$link) or die ("no puc pillar els temes");
while ($caca=mysql_fetch_row($temes)) {
    echo"
     <option value=\"$caca[0]\">$caca[1]</option>
    ";
}
echo "
     </select>
    <td><input type =\"submit\" name=\"mod\" value=\"modificar taula\">
    <td><a href=\"../borrar.php?idapunt=$columna[0]\">borrar</a>
   </table>

   <table border='1'>
    <td width='60'><b>Comanda:</b><td> <textarea rows=\"1\" name=\"comanda\" cols=\"100\" color=\"blue\">$columna[2]</textarea><br>
   </table>

  <table border ='1'>
    <td width='60'><b>Comentari:</b><td> <textarea rows=\"1\" name=\"comentari\" cols=\"100\">$columna[3]</textarea>
  </table>

 </table>
</form>
</table>
</center>

";
}
echo "
<center>
<!--links-->
 <a href=\"http:/www.mundodisea.com/insert.php\"><i>inserir noves dades</i></a>
 <a href=\"http:/www.mundodisea.com\"><i>mundodisea</i></a>
<!--links-->
</center>
";
?>
</body>
</html>

