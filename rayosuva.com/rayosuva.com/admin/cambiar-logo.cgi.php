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

$nom_fitxer=`echo $titulo | awk {'print $1".jpg"'}`;
system("mv $userfile /inlander/sites/rayosuva.com/web/htdocs/logos/$nom_fitxer");


	$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
	mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");

		$result = mysql_query("update empresa set logo_path='/logos/$nom_fitxer' where idempresa='$idempresa'") or die ("<br><br><center>no se ha podido actualizar la empresa <br>".mysql_error());

	include "menu.php";

        echo "<br><br><center> El logo ha sido modificado satisfactoriamente";

?>
