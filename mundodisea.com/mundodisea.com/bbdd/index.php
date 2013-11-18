
<?php
include 'capcelera.php';

$link= mysql_connect("localhost","mundodisea","athi3") or die ("no puc conectar a localhost :(");
mysql_select_db("mundodisea_db", $link) or die ("no puc conectar a la base de dades");
$result = mysql_query("SELECT * FROM apunts", $link) or die ("no puc fer la query");


echo "
<center>

<a href=\"insert.php\">inserir un nou registre </a> ||
<a href=\"index.php\">mundodisea</a>
<br>
<br>

 <form method=\"get\" action=\"./buscar1.php\">
    <select name=\"idtema\">
    ";
     $temes=mysql_query("SELECT * FROM tema order by tema",$link) or die ("no puc pillar els temes");
     while ($caca=mysql_fetch_row($temes)) {
       echo"<option value=\"$caca[0]\">$caca[1]</option>";
     }
echo "
    </select>
<input type =\"submit\" name=\"mod\" value=\"mostrar\">
</form>
<br>
<form method=\"post\" action=\"./buscar2.php\">
<input type=\"text\" name=\"keyword\">
<input type =\"submit\" name=\"mod\" value=\"buscar\">
</form>
";
?>
