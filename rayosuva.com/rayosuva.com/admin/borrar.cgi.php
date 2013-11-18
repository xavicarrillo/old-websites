
<html>
<head>
        <title>RAYOSUVA.COM - Administració</title>

        <style>
                A:HOVER{color:#050E53}
                A{text-decoration:none;}
        </style>
</head>
 <body bgcolor="#33669" text="white" link="white" vlink="white" alink="white">

<?
$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");

$result=mysql_query("select * from empresa where idempresa='$idempresa'") or die ("<center><br><br>error, no se ha podido seleccionar la empresa");


while ($bucle=mysql_fetch_row($result)) {
	$logo=$bucle[15];
}

//die("logo es $logo");

if (strcmp($logo,"/logos/default.jpg") != 0) {
	
	$paz="/inlander/sites/rayosuva.com/web/htdocs".$logo_path;

	exec("rm $paz");

}

$result2 = mysql_query("delete from empresa where idempresa='$idempresa'") or die ("<center><br><br>error, no se ha podido borrar la empresa");

include 'menu.php';
echo "<center><br><br><i>la empresa ha sido borrada correctamente";
?>

  </body>
</html>
