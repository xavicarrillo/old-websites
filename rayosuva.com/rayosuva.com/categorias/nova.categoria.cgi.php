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

$result=mysql_query("insert into categoria(nom,nivell) values('$nova_categoria','0')") or die("
      <br><br><br><center>no se ha podido introducir la categoria, probablemente esté repetida");

echo "<br><br><center><i>la nueva categoría ha sido introducida en la base de datos</p>";
?>

</body>
</html>
