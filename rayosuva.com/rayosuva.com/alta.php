<html><title>RAYOSUVA.COM - alta online</title>
 <script LANGUAGE=JavaScript>

	function comprova(theForm) {

		if (document.forms.alta.email.value=="") {
			alert('Debe introducir un email');
			 theForm.email.focus();
			return(false);
		}

                if (document.forms.alta.title.value=="") {
                        alert('Debe introducir un título');
                         theForm.title.focus();
                        return(false);
                }

                if (document.forms.alta.telefono.value=="") {
                        alert('Debe introducir un telefono');
                         theForm.telefono.focus();
                        return(false);
                }

                if (document.forms.alta.contact_name.value=="") {
                        alert('Debe introducir un nombre de contacto');
                         theForm.contact_name.focus();
                        return(false);
                }

                if (document.forms.alta.tarjeta_num.value=="") {
                        alert('Por favor, introduzca su tarjeta de crédito.\nRecuerde que la transferencia es segura y que sus datos no serán revelados a terceras persona.s');
                         theForm.tarjeta_num.focus();
                        return(false);
                }
	}

 </SCRIPT>

<body bgcolor=#336699>

<FORM ENCTYPE="multipart/form-data" name="alta" ACTION="alta.cgi.php" METHOD=POST onSubmit="return comprova(this)">
<table border="0" cellpadding="5">
<tr> <td colspan="3">
<!--input type=hidden name=pflag value=add--!>
<td><input type=hidden name=pflag></td>
<table border="0" cellspacing="0" cellpadding="4" width="100%">
<tr>
<td><font face="Arial" size="2"><b>Título</b></font></td>
<td><input type=text name=title size=40></td>
</tr>
<tr>
<td><font face="Arial" size="2"><b>Url<b></font></td>
<td><input type=text name=url size=40 value='http://'><br><font size=1 color=white>(ejemplo: www.mundodisea.com)</font></td>
</tr>
<tr>
<td><font face="Arial" size="2"><b>Eslogan</b></font></td>
<td><input type=text name=eslogan size=30></td>
</tr>
<tr>
<td valign="top"><font face="Arial" size="2"><b>Descripción</b>
<td><textarea name="description" cols="40" rows="10" maxlength="255" wrap="virtual"></textarea></td>
</tr>
<tr>
<td><font face="Arial" size="2"><b>Categoría</b></font></td>
<?
$link= mysql_connect("localhost","rayosuva","vor5toh3") or die ("no puc conectar a localhost :(");
mysql_select_db("rayosuva_db", $link) or die ("no puc conectar a la base de dades");

echo " <td><font face=\"Arial\" size=\"2\">  <select name=\"idcategoria\">  ";
   
$categories=mysql_query("SELECT * FROM categoria",$link) or die ("no puc pillar les categories");
    
while ($cat=mysql_fetch_row($categories)) {
    echo"     <option value=\"$cat[0]\">$cat[1]</option>    ";
}
?>

</select></font></td>
</tr>
<tr>
<td><font face="Arial" size="2"><b>Dirección</b></font></td>
<td><input type=text name=direccion size=30 > <F8></td>
</tr>
<tr>
<td><font face = "Arial" size = "2"><b> Telefono </b></font></td>
<td><input type=text name=telefono size=30 ></td>
</tr>
<tr>
<td><font face="Arial" size="2"><b>Fax</b></font></td>
<td><input type=text name=fax size=30 ></td>
</tr>
<tr>
<td><font face="Arial" size="2"><b>Ciudad</b></font></td>
<td><input type=text name=ciudad size=30 ></td>
</tr>
<tr>
<td><font face="Arial" size="2"><b>Provincia</b></font></td>
<td><input type=text name=provincia size=30 ></td>
</tr>
<tr>
<td><font face="Arial" size="2"><b>Código Postal</b></font></td>
<td><input type=text name=codigopostal size=30 ></td>
</tr>
<tr>
<td><font face="Arial" size="2"><b>Nombre de Contacto</b></font></td>
<td><input type=text name=contact_name size=30 ></td>
</tr>
<tr>
<td><font face="Arial" size="2"><b>Email</b></font></td>
<td><input type=text name=email size=30 ></td>
</tr>
<tr>
<td><font face="Arial" size="2"><b>tarjeta de crédito</b></font></td>
<td><input type=text name=tarjeta_num size=30 ></td>
</tr>
<tr>
 <INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="102400">
    <td><font face="Arial" size="2"><b>Logotipo &nbsp</td>
       <td><INPUT NAME="userfile" TYPE="file"><td> <p> </p></td><td width="5%">
</table>
<blockquote><font size=1 color=white>Nota: el fichero debe ocupar como máximo 100 kb (comprímalo a formato JPG)<br>
el tamaño recomendado es 175x100 píxels<br>
si no tiene logo se le asignará uno genérico. Cuando tenga uno podrá actualizarlo mandándonoslo a webmaster@rayosuva.com (incluya el password que se le asignará al darse de alta en el buscador)</tr></td>

</blockquote>
<table>
<tr>
<td><input type=submit name=submit value="Enviar"  onClick='validarEnviar(this.form)'>
<td><input type=reset name=reset vale="Borrar"></td>
</tr>
</table>
</form> </td>
</tr>
</table>

</body>
</html>

