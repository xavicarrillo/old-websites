<?php

$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");


 $query = "select * from empresa where alta=0 ";

  if(!empty($title)) {
    $query .= "and titulo like '%$titulo%' ";
  }
  if(!empty($url)) {
    $query .= "and url like '%$url%' ";
  }
  if(!empty($descripcion)) {
    $query .= "and descripcion like '%$descripcion%' ";
  }
  if(!empty($idcategoria)) {
    $query .= "and idcategoria like '%$idcategoria%' ";
  }
  if(!empty($contacto)) {
    $query .= "and contacto like '%$contacto%' ";
  }
  if(!empty($email)) {
    $query .= "and email like '%$email%' ";
  }

  $query .= " order by titulo asc";
  $result = mysql_query($query) or die ("<center><b>error:</b> no se ha podido realizar la consulta");

$registres=mysql_num_rows($result);
 echo "
        <font face =\"helvetica\" size =\"1\">
         <center><p> Se han encontrado <b>$registres</b> empresas en esta categoría <br><br> <br><br>
         <table  border=\"1\" cellspacing=\"3\" width=\"100%\">
       <tr>
      ";

while ($empresa=mysql_fetch_row($result)) {
  $idempresa=$empresa[0];

 echo "

 <tr> <td>
<A onclick=\"MM_openBrWindow('tarjeta.php?idemp=$idempresa','$empresa[1]','scrollbars=yes,resizable=yes,width=495,height=655')\" HREF=\"#\">  <font face =\"Arial\" size =\"+0\"> <b>$empresa[1]</b></font></A>
 <tr> <td> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\"><a href=\"$empresa[2]\" target=\"_blank\">$empresa[2]</a></font>
 <tr> <td> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">Nombre de contacto: <i>$empresa[12]</i>
 &lt<a href=mailto:$empresa[13]>$empresa[13]</a>&gt
 <tr><td> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">fecha: $empresa[14]
<br><br><br><br>

";

}

?>

<html>
