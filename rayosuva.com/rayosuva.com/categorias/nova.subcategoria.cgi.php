<html>
<head>
        <title>RAYOSUVA.COM - panel de control de categorías</title>
        <style>
                A:HOVER{color:#050E53}
                A{text-decoration:none;}
        </style>
</head>

 <body bgcolor="#33669" text="white" link="white" vlink="white" alink="white">

<?
 
include 'menu.php';
$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");

if ($nova=="") { echo "<script>alert('debe introducir un nombre');history.back();</script>"; die();}

$query1=mysql_query("select * from categoria where idcategoria='$idcategoria'",$link) or die ("sux1");

while ($cat=mysql_fetch_row($query1)) {
    $categoria_original=$cat[1];
    $nivell=$cat[2];
}

$nova_categoria=$categoria_original." >> ".$nova;
$nou_nivell=$nivell+1;

$inserim_a_categoria=mysql_query("insert into categoria (nom,nivell) values ('$nova_categoria','$nou_nivell')") or die ("											<center><br><br>no puedo meter datos en la categoria.<br>
									<br>Probablemente el campo está duplicado");

$sabrem_idcat=mysql_query("select * from categoria where nom='$nova_categoria'");
  while ($uail=mysql_fetch_array($sabrem_idcat)) {
     $idcat_del_que_acabem_de_inserir=$uail[0];
  }

if ($nivell !=0) {

  //agafem desde el segon fins al final de la categoria (que sera just el valor que es va incerir a SUBCATEGORIA a l'ultim query d'akesta categoria, i es el que necessitem per sumar-li $nova i fer una nova subcategoria


   $arr4y=split(" >> ",$categoria_original);
   $caca=array_shift ($arr4y);

   $x=1;
   $cont=0;
   $cadena_a_buscar="";

   while ($arr4y[$x]) {
     $cont++; //contem el numero d'elements
     $x++;
   }

   $x=0;

   while ($x<$cont) {
     $cadena_a_buscar=$cadena_a_buscar.$arr4y[$x]." >> ";
     $x++;
   }
   $cadena_a_buscar=$cadena_a_buscar.$arr4y[$x];

//die ("la cadena a buscar es *$cadena_a_buscar*");

   $nom_antic=mysql_query("select * from subcategoria where  idcat='$idcategoria' and nom like '%$cadena_a_buscar%'") or die ("
		no puc fer la query del AND");

   while ($nom=mysql_fetch_array($nom_antic)) {
     $nom_subantiga=$nom[1];
     $idpare=$nom[3];
   }


   $nou_nom=$nom_subantiga." >> ".$nova;

   $inserim_a_subcategoria=mysql_query("insert into subcategoria (nom,idcat,idpare) values ('$nou_nom','$idcat_del_que_acabem_de_inserir','$idpare')") or die ("
                                                                                 no puedo meter datos en subcategoria");
   echo "<center><br><br><i>se ha introducido la subcategoría con éxito</i>";

} else {

//si el nivell es 0

 $inserim_a_subcategoria=mysql_query("insert into subcategoria (nom,idcat,idpare) values ('$nova','$idcat_del_que_acabem_de_inserir','$idcategoria')") or die ("
                                                                                 no puedo meter datos en subcategoria");
 echo "<center><br><br><i>se ha introducido la subcategoría con éxito</i>";
}

?>
</body>
</html>

