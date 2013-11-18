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
include 'menu.php';

$color_fons="#33669";

echo "<br><br><br>";

$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");

$result = mysql_query("select * from empresa where idempresa='$idempresa'") or die ("error, no puedo seleccionar la empresa");

while ($empresa=mysql_fetch_row($result)) {
 echo "

<FORM ACTION=\"/admin/update.cgi.php\" METHOD=POST>

";

/*
<table border=\"1\"><tr><td>
 <table  border=\"1\" cellspacing=\"3\" width=\"70%\">
*/
  
echo "
<table border=\"0\" bgcolor=\"white\">
        <td bgcolor=\"white\">
                <table border=\"0\" cellspacing=\"2\" cellpadding=\"5\" width=\"70%\">

 <tr><td bgcolor=$color_fons width=\"10\"> <font face =\"Arial\" size =\"-1\"> <b>Título: </b>
   <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"titulo\" value=\"$empresa[1]\">
 <tr><td bgcolor=$color_fons> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">url: 
   <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"url\" value=\"$empresa[2]\">
 <tr><td bgcolor=$color_fons> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">eslógan:
   <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"eslogan\" value=\"$empresa[3]\">
 <tr><td bgcolor=$color_fons> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">descripción:
   <td bgcolor=$color_fons><textarea rows=\"10\" name=\"descripcion\" cols=\"60\">$empresa[4]</textarea>
 <tr><td bgcolor=$color_fons> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">categoría: 

     <td bgcolor=$color_fons>      <select name=\"idcategoria\">
";
$cate=mysql_query("select * from categoria") or die ("<br><br><br><center>ERROR: No  se ha podido acceder a la tabla categoria");

while ($caca=mysql_fetch_row($cate)) {
 if ($caca[0]==$idcategoria) { 

  echo"     <option value=\"$caca[0]\" selected>$caca[1]";

  } else { echo"     <option value=\"$caca[0]\">$caca[1]</option>";
 }
}
echo "
     </select>

 <tr><td bgcolor=$color_fons> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">dirección: 
   <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"direccion\" value=\"$empresa[6]\">
 <tr><td bgcolor=$color_fons> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">teléfono:
   <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"telefono\" value=\"$empresa[7]\">
 <tr><td bgcolor=$color_fons> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">fax:
   <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"fax\" value=\"$empresa[8]\">
  <tr><td bgcolor=$color_fons> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">ciudad:
   <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"ciudad\" value=\"$empresa[9]\">
 <tr><td bgcolor=$color_fons> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">provincia:
  <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"provincia\" value=\"$empresa[10]\">
 <tr><td bgcolor=$color_fons> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">código postal:
  <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"cp\" value=\"$empresa[11]\">
 <tr><td bgcolor=$color_fons> <font face =\"Verdana\" size =\"-1\">Nombre de contacto:
  <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"contact\" value=\"$empresa[12]\">
 <tr><td bgcolor=$color_fons> <font face =\"Verdana\" size =\"-1\">Mail:
  <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"mail\" value=\"$empresa[13]\">
 <tr><td bgcolor=$color_fons>  <font face =\"Verdana\" size =\"-1\">Password:
  <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"pas\" value=\"$empresa[16]\">
 <tr><td bgcolor=$color_fons>  <font face =\"Verdana\" size =\"-1\">Número Tarjeta de Crédito
  <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"tarjeta_num\" value=\"$empresa[18]\">

 <tr><td bgcolor=$color_fons> <font face =\"Verdana, Helvetica, Arial\" size =\"-1\">Fecha de inscripción
  <td bgcolor=$color_fons><input size=\"60\" type=\"text\" name=\"fecha\" value=\"$empresa[14]\">
<input size=\"60\" type=\"hidden\" name=\"idempresa\" value=\"$empresa[0]\">

 <ul>
 ";
$logo=$empresa[15];

 if ($empresa[17]==0) {
   echo "<tr><td bgcolor=$color_fons>alta:
	 <td bgcolor=$color_fons> no <input type=\"radio\" name=\"alta\" value=\"no\" >
	 sí <input type=\"radio\" name=\"alta\" value=\"si\" checked>";

 } else {
 echo "<tr><td bgcolor=$color_fons>alta:
         <td bgcolor=$color_fons> no <input type=\"radio\" name=\"alta\" value=\"no\" checked >
         sí <input type=\"radio\" name=\"alta\" value=\"si\">";
 }
}

echo "</ul>


  <tr><td bgcolor=$color_fons><input size=\"60\" type =\"submit\" name=\"mod\" value=\"modificar empresa\">
	<td bgcolor=$color_fons>


</form>
";
?>

</body>
</html>

