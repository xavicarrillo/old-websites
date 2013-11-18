<?
include 'capcelera.php';
$link= mysql_connect("localhost","mundodisea","athi3") or die ("no puc conectar a localhost :(");
mysql_select_db("mundodisea_db", $link) or die ("no puc conectar a la base de dades");
$result = mysql_query("DELETE from apunts where idapunt='$idapunt'") or die ("no puc fer la query");
print "
<center><i>s'ha borrat el regitre amb èxit</i>
<br><br>
<a href=\"index.php\"><i>buscar</i></a><br>
<a href=\"insert.php\"><i>inserir dades</i></a><br>
<a href=\"http:\\www.mundodisea.com\"><i>mundodisea</i></a><br></center
";

?>
</body>
</html>
