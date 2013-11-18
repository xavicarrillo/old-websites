<html>
 <script language="JavaScript">

  function obreFinestra(laURL,nomFinestra,parametres) {
    window.open(laURL,nomFinestra,parametres);
  }

 </script>

<center>

<?php

$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");

$result = mysql_query("SELECT * FROM empresa where idcategoria='$idcat' and alta='0'") or die ("error: no puedo seleccionar las empresas de la base de datos");

$result2 = mysql_query ("select * from categoria where idcategoria='$idcat'") or die ("sux");

  while ($categoria=mysql_fetch_row($result2)) {
    $nom_categoria=$categoria[1];
  }

$registres=mysql_num_rows($result);
 echo "
	<font face =\"helvetica\" size =\"6\"><b align = \"left\">$nom_categoria</b></font> <br><br>
	<a href=\"/index.php\">volver</a>
        <p> Se han encontrado <b>$registres</b> empresas en esta categoría <br><br><br><br>
  ";

if ($registres==0) die(); else {

	echo "
	Pulse en el título de la empresa para ver una tarjeta de presentación de ésta <br><br>
	</p>

       <table  border=\"1\" cellspacing=\"3\" width=\"100%\">
       <tr>
      ";

	while ($empresa=mysql_fetch_row($result)) {
		 echo "

		 <tr> <td>

		<A onclick=\"obreFinestra('tarjeta.php?idempresa=$empresa[0]','$empresa[1]','scrollbars=yes,resizable=yes,width=495,height=655')\" HREF=\"#\">  <font face =\"Arial\" size =\"+0\"> <b>$empresa[1]</b></font></A>
		 <tr> <td> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\"><a href=\"$empresa[2]\" target=\"_blank\">$empresa[2]</a></font>
		 <tr> <td> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">Nombre de contacto: <i>$empresa[12]</i>
		 &lt<a href=mailto:$empresa[13]>$empresa[13]</a>&gt
		 <tr><td> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">fecha: $empresa[14]
		<br><br><br><br>

		";
    
	} //del while

} //del if
?>
</table>
</html>
