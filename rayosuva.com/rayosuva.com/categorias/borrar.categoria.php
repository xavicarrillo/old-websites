<html>
<head>
        <title>RAYOSUVA.COM - panel de control de categorías</title>
        <style>
                A:HOVER{color:#050E53}
                A{text-decoration:none;}
        </style>
</head>

 <body bgcolor="#33669" text="white" link="white" vlink="white" alink="white">

<?php
	$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
	mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");

	$hiHanEmpreses=mysql_query("select * from empresa where idcategoria = '$idcategoria'");
	$numero_de_registres=mysql_num_rows($hiHanEmpreses);

	$result=mysql_query("select * from categoria where idcategoria = '$idcategoria'");
	while ($columna = mysql_fetch_row($result)) {
		$nom=$columna[1];
		$nivell_de_la_categoria_a_borrar=$columna[2];
	}

	$nivell_seguent=$nivell_de_la_categoria_a_borrar+1;

	if  ($numero_de_registres>0) {
                                        include 'menu.php';
					echo "<br><br><br><center>No se puede borrar la categoría, aún hay empresas asociadas a ella";
					die;

				     } else {
					$result=mysql_query("select * from categoria where nivell='$nivell_seguent' and nom like '%$nom%'") or die ("<center><br><br>no puedo buscar categorias hijas. ".mysql_error());
				        while ($columna = mysql_fetch_row($result)) {
						$id=$columna[0];
					}
					if (!empty($id)) die ("<br><br><center>esta categoria tiene categorias por debajo, bórrelas primero. <br><br><a href=\"/categorias/select.categorias.php\">volver</a>");

					$result = mysql_query("delete from categoria where idcategoria='$idcategoria'") 
					or die ("<center>no se ha podido borrar la categoria");

					$result = mysql_query("delete from subcategoria where idcat='$idcategoria'") or die ("sub");
	
					include 'menu.php';
					echo "
						<center>
					        <br><br><br><i>la categoría ha sido eliminada</i><br>
						</center>
					";
				     }

?>
</body>
</html>
