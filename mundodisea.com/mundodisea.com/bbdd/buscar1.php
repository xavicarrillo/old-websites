<?
include 'capcelera.php';

$link= mysql_connect("localhost","mundodisea","athi3") or die ("no puc conectar a localhost :(");
mysql_select_db("mundodisea_db", $link) or die ("no puc conectar a la base de dades");
$result = mysql_query("SELECT * FROM apunts", $link) or die ("no puc fer la query");

$query = mysql_query("select * from apunts where idtema='$idtema'") or die ("no puc fer la query");
echo "
<center>
<br>
<br>

<table  bgcolor=#336699 border=\"0\" cellspacing=\"3\" height=\"50\">
<tr>
<td><a href=\"insert.php\">inserir un nou registre</a>
<td><a href=\"index.php\">buscar</a>
<td><a href=\"/index.html\">mundodisea</a>
</table>

<table border=\"0\" bgcolor=\"white\">
        <td bgcolor=\"white\">
        <table border=\"0\" cellspacing=\"4\"> 
		<table border=\"0\" cellspacing=\"3\" cellpadding=\"7\">
			<tr><td bgcolor=\"#336699\" align=\"center\"><b>comanda
			    <td bgcolor=\"#336699\" align=\"center\"><b>comentari</b>";

while ($columna = mysql_fetch_row($query)) {
$nomtema=mysql_query("select * from tema where idtema='$idtema'");
echo "
	<tr>
	<td align=\"left\" bgcolor=#336699><pre>$columna[2]</pre>
	<td align=\"left\" bgcolor=#336699><pre>$columna[3]</pre>
	<td bgcolor=#336699> <a href=\"borrar.php?idapunt=$columna[0]\">borrar</a>
	<td bgcolor=#336699> <a href=\"update.php?idapunt=$columna[0]\">modificar</a>
";
}
 echo "
	</table>
</table>
<br>
<br>
<table  bgcolor=#336699 border=\"0\" cellspacing=\"3\" height=\"50\">
	<tr>
	<td><a href=\"insert.php\">inserir un nou registre</a>
	<td><a href=\"index.php\">buscar</a>
	<td><a href=\"index.php\">mundodisea</a>
</table>
</body>
";
?>
