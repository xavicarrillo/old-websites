<html>
<head>
        <title>RAYOSUVA.COM - Cambio de logo</title>
        <style>
                A:HOVER{color:#050E53}
                A{text-decoration:none;}
        </style>
</head>

 <body bgcolor="#33669" text="white" link="white" vlink="white" alink="white">
	
	<center> 
	<br><br>
	<a href="./empresas.php">atrás</a>
	<br><br>
        <br><br>
	 Seleccione el logo. <br> <br>Recuerde que el tamaño no debe sobrepasar los 100 Kbs y debe estar en formato jpg.
	<br><br><br>

	<FORM ENCTYPE="multipart/form-data" ACTION="/admin/cambiar-logo.cgi.php" METHOD=POST>

	    <INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="102400">
		<?php
			echo "

			    <input type=\"hidden\" name=titulo value=$titulo>
         			 <input type=\"hidden\" name=idempresa value=$idempresa>
			";
		?>


       		<INPUT NAME="userfile" TYPE="file">

			<br><br>

	    <input type="submit" value="enviar">

	</form>
 </body>

</html>
