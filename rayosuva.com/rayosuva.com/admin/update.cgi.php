<html>

<head>
        <title>RAYOSUVA.COM - panel de control de categorías</title>
        <style>
                A:HOVER{color:#050E53}
                A{text-decoration:none;}
        </style>
</head>
 <body bgcolor="#33669" text="white" link="white" vlink="white" alink="white">
  <center>


<?
	$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
	mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");

 if ($alta=="si") $alta=0; else $alta=1;

		$result = mysql_query("update empresa set titulo='$titulo', url='$url', eslogan='$eslogan', descripcion='$descripcion',direccion='$direccion', telefono='$telefono', fax='$fax', ciudad='$ciudad', provincia='$provincia', cp='$cp', contacto='$contact', email='$mail', fecha='$fecha', idcategoria='$idcategoria', tarjeta_num='$tarjeta_num', alta='$alta', pas='$pas' where idempresa='$idempresa'") or die ("<br><br><center>no se ha podido actualizar la empresa <br>".mysql_error());

        include "menu.php";

	echo "<br><br><center> La empresa ha sido modificada satisfactoriamente";
?>


