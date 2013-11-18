<?php
include 'capcelera.php';

if (isset ($idapunt)) {
  $link= mysql_connect("localhost","mundodisea","athi3") or die ("no puc conectar a localhost");
  mysql_select_db("mundodisea_db",$link) or die ("no puc sel.leccionar la bbdd");
 mysql_query("UPDATE apunts SET idtema='$idtema', comanda='$comanda', comentari='$comentari' where idapunt='$idapunt'") or die ("no puc fer el update\n");
} else {
echo "<b>no has especificat l'id</b>";
}
echo "
<center>
<br>
<br>
<i>l'apunt ha estat modificat</i><br><br>
<a href=\"insert.php\">inserir un nou registre</a>
<a href=\"index.php\">buscar</a>
<a href=\"index.php\">mundodisea</a>
";
?>
