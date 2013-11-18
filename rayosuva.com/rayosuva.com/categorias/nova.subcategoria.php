<html>
<head>

        <title>RAYOSUVA.COM - panel de control de categorías</title>
        <style>
                A:HOVER{color:#050E53}
                A{text-decoration:none;}
        </style>

<script LANGUAGE=JavaScript>

function comprova() {
alert('hola');
                        if document.forms[0].documents[1]=="" {
				alert('Debe introducir un valor');
	                        return(false);
			}
                }

</script>

</head>

 <body bgcolor="#33669" text="white" link="white" vlink="white" alink="white">


<?
include 'menu.php';

$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");
?>

<br><br>
<center>
<form method="POST" onSubmit="comprova()" name="sub" ACTION="./nova.subcategoria.cgi.php">

	<table border="0" cellspacing="5">
<?php
echo "
		<input type=\"hidden\" name=\"idcategoria\" value=\"$idcategoria\"> 
		<p>esta subcategoria se añadirá a la categoría <i>$nom</i></p>
	<td><input type=\"text\" name=\"nova\">
	<td><input type=\"submit\" onMouseOver=\"comprova()\" name=\"boto submit\" value=\"hecho\">
</form>
";

?>

</body>
</html>

