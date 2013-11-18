<link href="../scripts/acceso.css" rel="stylesheet" type="text/css"> 
<body bgcolor="#000000">
<span class="textaronj"> <strong>Actualizaci&oacute;n de exploits</strong></span><br>
  <br>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<form ENCTYPE="multipart/form-data" name="alta" ACTION="cambiar_exploit.php" METHOD=POST>

  <tr class="text"> 
    <td>exploit:</td>
    <td> <input name="userfile" type="file"></td>
  </tr>
  <tr class="text">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="text"> 
    <td> 
      <?php
	echo "<input type=\"hidden\" name=\"url_exploit_bbdd\" value=\"$url_exploit_bbdd\">";
	echo "<input type=\"hidden\" name=\"url_exploit_en_si\" value=\"$url_exploit_en_si\">";
	echo "<input type=\"hidden\" name=\"SO\" value=\"$SO\">";
        echo "<input type=\"hidden\" name=\"targetversion\" value=\"$targetversion\">";
        echo "<input type=\"hidden\" name=\"target\" value=\"$target\">";

      ?>
    </td>
    <td> <input type ="submit" name="intro" value="introducir"> <input name="reset" type ="reset" value="borrar"></td>
  </tr>
  </form>
</table>
