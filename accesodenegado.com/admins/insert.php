<html>
<head>
<title>accesodenegado - base de datos Exploits </title>
 <script LANGUAGE=JavaScript>

        function comprova(theForm) {
	alert('hola');

                if (document.forms.insert.target.value=="") {
                        alert('Debe introducir un valor en objetivo: apache, IIS, etc.');
                         theForm.target.focus();
                        return(false);
                }

 </script>
<link href="scripts/acceso.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#999999" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<? include "inc/cabecera.ad" ?>
<tr> <td width="30%" bgcolor="#999999">&nbsp;</td>

<td width="70%" bgcolor="#999999" class="textBold">Introducción de exploits a la base de datos</td>
<td bgcolor="#999999"><img src="ima/logoweb2.gif" width="119" height="43"></td>
</tr>
<tr> <td bgcolor="#999999">&nbsp;</td>
<td bgcolor="#999999" class="text"> <br>
<br>

<form ENCTYPE="multipart/form-data" name="insert" ACTION="meter_exploit.php" METHOD=POST onSubmit="return comprova(this)">

<?php
	include ("inc/funciones.php");
	echo "Tipo de exploit: ";
	ImprimeTipos(generico);
?>

<br>
objetivo (demonio,etc.): <input type="text" name="target"> <br>
versión del objetivo: <input type="text" name="targetversion"> <br><br>

remoto: 
<?php
	ImprimeRemoto (1); //1=no
	echo"<br><br> SO:";
	ImprimeSO(windows); //win98
?>

<br>
versión del SO: <input type="text" name="versionSO"> <br>
arquitectura del SO: <? ImprimeArquitecturaSO (x86); ?>
<br><br>
lenguaje:
<?php ImprimeLenguaje(c); ?>
<br>

exploit: <input NAME="userfile" TYPE="file"> <br><br>

<br><br>

comentario: <br>
<textarea rows="10" name="comentario" cols="70"></textarea>

<br>
<br>
<input type ="submit" name="insert" value="introducir">
<input type ="reset" value="borrar">
</form>

</td>
<td bgcolor="#999999">&nbsp;</td>
</tr>

<tr> <td bgcolor="#999999">&nbsp;</td>
<td bgcolor="#999999" class="text">&nbsp;</td>
<td bgcolor="#999999">&nbsp;</td>
</tr>
</table>


