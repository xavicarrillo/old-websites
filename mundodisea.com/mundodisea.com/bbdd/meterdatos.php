<?php
include 'capcelera.php';

$link= mysql_connect("localhost","mundodisea","athi3") or die ("no puc conectar a localhost :(");
mysql_select_db("mundodisea_db", $link) or die ("no puc conectar a la base de dades");

//$coma=htmlspecialchars($comanda);
//$come==htmlspecialchars($comentari);

$result = mysql_query("INSERT into apunts (idtema,comanda,comentari) values('$idtema','$comanda','$comentari')") or die ("no puc fer la query");
print "
<center>
<i>s'ha introduït el nou registre amb èxit</i>
<br>
<br>
<a href=\"insert.php\">inserir un nou registre</a>
<a href=\"index.php\">buscar</a>
<a href=\"/index.html\">mundodisea</a>
";
?>

