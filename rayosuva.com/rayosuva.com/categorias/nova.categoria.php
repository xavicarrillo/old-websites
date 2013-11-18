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
echo "
<br><br><br>
<center>
<form method=\"post\" action=\"nova.categoria.cgi.php\">
<input type=\"text\" name=\"nova_categoria\">
<input type=\"submit\" value=\"nueva categoria\">
</form>
</center>
";
?>
</body>
</html>
