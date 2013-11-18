<?
include 'capcelera.php';

//$link= mysql_connect("localhost","mundodisea","athi3") or die ("no puc conectar a localhost :(");

$bbdd=mysql_select_db("mundodisea_db", $link) or die ("no puc conectar a la base de dades");
//$q = select * from $bbdd where ($comanda or $comentari) likes % $query %;
$q="select * from $bbdd where $comanda llike '%$query%' or $comentari like '%query';
echo"
?>
