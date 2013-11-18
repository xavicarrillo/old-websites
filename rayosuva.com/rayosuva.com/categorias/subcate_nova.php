<html>
<body bgcolor="blue" text="black" link="white" vlink="white" alink="white">
  <center>
    <a href="./cat_nova.php">nueva categoría  </a>
    <a href="./cate_mostrar.php">mostrar categorías </a>
    <a href="/index.php">inicio</a>

<?php
echo "el nivell es: $nivell\n";

if ($nivell==5) { die("<br><br><b>se ha alcanzado el límite de subcategorías</b><br><br>");}

$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");
$novasub=$nom." >> ".$nova;
$numero=$nivell+1;
$subcategoria="subcat".$numero;

echo "la nova  paraula es: $nova\n";
echo "el nou nivell es: $numero\n";
echo "la sub es: $subcategoria\n";
echo "la idcat es: $idcategoria\n";
echo "la paraula que insertarem a 'categoria' es: $novasub\n";

//aixo ho faig xq nomes rulara si estem a nivell 0, xq despres ja no hi ha idcat sino idsubX
//tambe el que es pot fer es cambir l'idcat de la taula categoria per un "idsub0" i ens estalviem els if :P

if ($nivell==0) {
$result=mysql_query("insert into $subcategoria (nom, idcat) values('$nova','$idcategoria')",$link) or die("
		    <br><br><b>no se ha podido insertar el campo, probablemente está repetido</b><br><br>");
} else {

$sub="idsub".$nivell;
$nivell_anterior=$nivell-1;
$idsub="idsub".$nivell_anterior;

$result=mysql_query("insert into $subcategoria (nom, $sub) values('$nova','$idsub')",$link) or die("
                    <br><br><b>no se ha podido insertar el campo, probablemente está repetido</b><br><br>");
}


$query1=mysql_query("insert into categoria (nom, ultima) values ('$novasub','$numero')",$link) or die ("no puc fer la query");
$query2=mysql_query("select idcategoria from categoria where nom='$novasub'",$link) or die  ("no puc fer la query2");
$query3=mysql_query("update categoria set ultima='$numero' where idcategoria='$query2'",$link) or die ("no puc fer la query3");

?>

<a href="javascript:history.go(-1)">volver</a>
</center>

</body>
</html>

