<html>
<head>
        <title>RAYOSUVA.COM - panel de control de categorías</title>
        <style>
                A:HOVER{color:#050E53}
                A{text-decoration:none;}
        </style>
 
<body bgcolor="#33669" text="white" link="white" vlink="white" alink="white">

<?php
/*
      $userfile - El archivo temporal que se ha guardado en el servidor.
      $userfile_name - El nombre original del archivo enviado.
      $userfile_size - El tamaño del archivo recibido.
      $userfile_type - El tipo mime del archivo si el navigador envio esta información. Por ejemplo: &quot;image/gif&quot;.
After guessing about an hour I found out that for my qmail installation
only the following php.ini setting works:

sendmail_path =/var/qmail/bin/qmail-inject
*/


echo "<body bgcolor=#336699>";

if ($userfile_size>102400) { die ("<br><br><center><font face=\"Arial\" size=\"2\">el archivo ocupa demasiado. <br>Comprímalo o reduzca el tamaño y vuelva a intentarlo, por favor</center>"); }

include 'funcions.php';

$pas=`/usr/bin/mkpasswd -l 6 -C 0`;
$fecha=data_castella();
$alta="0"; // =true
$nom_fitxer=`echo $title| awk {'print $1".jpg"'}`;

if (!$userfile) $logo_path="/logos/default.jpg"; else {
	$logo_path="/logos/$nom_fitxer";
}

// die ("logo es $logo_path");

$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");

$categorias=mysql_query("SELECT * FROM categoria where idcategoria=$idcategoria",$link) or die ("<center><br><br>ERROR: no he podido acceder a la tabla categoria");

while ($cat=mysql_fetch_row($categorias)) {
          $cate=$cat[1];
}

$direccioMail="admin@mundodisea.com";
$subjecte="empresa $title introducida en el buscador";
$mensaje="El siguiente usuario ha sido dado de alta en el buscador:\n

 titulo=$title
 url=$url
 eslogan=$eslogan
 descripcion=$description
 categoria=$cate
 direccion=$direccion
 telefono=$telefono
 fax=$fax
 ciudad=$ciudad
 provincia=$provincia
 código postal=$codigopostal
 contacto=$contact_name
 email=$email
 el logo está en $logo_path
 password=$pas
 fecha=$fecha

";

$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("<center>no se ha podido acceder a la base de datos");

$result=mysql_query("INSERT INTO empresa (titulo, url, eslogan, descripcion, idcategoria, direccion, telefono, fax, ciudad, provincia, cp, contacto, email, fecha, logo_path, alta, pas, tarjeta_num) VALUES ('1','1','1','1','1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1','1','1','1')") OR DIE ("<center>no se ha podido insertar sus datos en el buscador. Compruebe que todos los datos son correctos, por favor");

$result2=mysql_query ("update empresa set titulo='$title', url='$url', eslogan='$eslogan', descripcion='$description', idcategoria='$idcategoria', direccion='$direccion', telefono='$telefono', fax='$fax', ciudad='$ciudad', provincia='$provincia', cp='$codigopostal', contacto='$contact_name', email='$email', logo_path='$logo_path', alta='$alta', pas='$pas', fecha='$fecha', tarjeta_num='$tarjeta_num'  where provincia='1'") or die ("<center>no se ha podido insertar sus datos en el buscador. Compruebe que todos los datos son correctos, por favor");

echo "
<br><br>
<center>
<font face=\"Arial\" size=\"2\">
su empresa ha sido introducida correctamente en la base de datos<br><br><br>
su password es $pas, apúntelo para posteriores modificaciones<br><br>
<a href=\"javascript:window.close()\">cerrar la ventana</a>
</font>
</center>
";

mail($direccioMail,$subjecte,$mensaje);

/*
mail("nobody@example.com", "the subject", $message,
     "From: webmaster@$SERVER_NAME\r\n"
    ."Reply-To: webmaster@$SERVER_NAME\r\n"
    ."X-Mailer: PHP/" . phpversion());
*/

system("mv $userfile /inlander/sites/rayosuva.com/web/htdocs/logos/$nom_fitxer"); 

?>
