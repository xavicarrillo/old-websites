<title>accesodenegado - base de datos de Exploits </title>

<link href="../scripts/acceso.css" rel="stylesheet" type="text/css">
<body bgcolor="#999999" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="100%" border="1" cellspacing="0" cellpadding="0">
<?
	include "inc/cabecera.ad";
	include ("inc/funciones.php");
	$total_exploits=`/bin/ls exploits|wc -l`;
?>
  <tr> 
    <td width="30%" bgcolor="#999999">&nbsp;</td>
    <td width="70%" bgcolor="#999999" class="textBold">Buscador de exploits</td>
    <td bgcolor="#999999"><img src="ima/logoweb2.gif" width="119" height="43"></td>
  </tr>
  <tr> 
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#999999" class="text">
	
	    <table width="0%" border="1" cellspacing="0" cellpadding="0">
          <tr class="text"> 
            <td>
		<? echo "Total exploits en la base de datos:$total_exploits<br><br>" ?>
            </td>
          </tr>
          <tr class="text"> 
	  <form action="search.php" name="searchxtarget" method="post">
	    <input type="hidden" name="busqueda_x_target" value="busqueda_x_target">
            <td><b>objetivo:</b> (ej: kernel, apache, cisco...):</td>
            <td> <input type="text" name="target"></td>
          </tr>
          <tr class="text"> 
            <td><br><b>versión:</b> <br>(ej: si hemos puesto "kernel": 2.4.7, <br>si hemos puesto "apache": 1.3.24...)</td>
            <td> <input type="text" name="targetversion"></td>
          <tr class="text"> 
              <td><br><b>Sistema:</b></td>
              <td>	<? ImprimeSO(cualquiera); ?>	</td>
	  </tr>
          </tr>
          <tr class="text">
            <td> <input type ="submit" name="intro" value="buscar"></td>
            <td>&nbsp;</td>
          </tr>
	</form>
	</table>

        <table width="0%" border="1" cellspacing="0" cellpadding="0">
          <tr class="text"> 
	    <form action="search.php" name="searchxnom" method="post">
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><b>nombre del exploit</b> (ej: apache-scalp.c):</td>
            	<td> <input type="text" name="nom"></td>
              <td> <input type ="submit" name="intro" value="buscar"></td>
	    </form>
        </table>

	</td>
    <td bgcolor="#999999">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#999999">&nbsp;</td>
    <td bgcolor="#999999" class="text">&nbsp;</td>
    <td bgcolor="#999999">&nbsp;</td>
  </tr>
</table>


