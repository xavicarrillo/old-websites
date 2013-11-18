<html>
  <body bgcolor="blue" text="white" link="white" vlink="white" alink="white">
  <center>
    <a href="./cat_nova.php">nueva categoría  </a>
    <a href="./cate_mostrar.php">mostrar categorías </a>
    <a href="/index.php">inicio</a>
   </center>
<br><br>
<?
echo " el nivell es $nivell\n
la idcategoria es $idcategoria
<center>
<form method=\"post\" action=\"subcate_nova.php\">
<input type=\"hidden\" name=\"nom\" value=$nom>
<input type=\"hidden\" name=\"idcategoria\" value=$idcategoria>
<input type=\"text\" name=\"nova\">
<input type=\"hidden\" name=\"nivell\" value=$nivell>
<input type=\"submit\" value=\"nueva subcategoria\">
</form>
</center>
";
?>

</body>
</html>

