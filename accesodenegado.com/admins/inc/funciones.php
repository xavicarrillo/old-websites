<?php
function Conecta() {
	$link= mysql_connect("localhost","accesodenegadoco","athi3") or die (mysql_error());
	mysql_select_db("accesodenegadocom_db", $link) or die (mysql_error());
}

function fecha_castellano() {
	$today = getdate();
	$mes = $today['month'];
	$dia = $today['mday'];
	$any = $today['year'];
	if ($mes=="January") { $mes="Enero";}
	if ($mes=="February") {$mes="Febrero";}
	if ($mes=="March") {$mes="Marzo";}
	if ($mes=="April") {$mes="Abril";}
	if ($mes=="May") {$mes="Mayo";}
	if ($mes=="June") {$mes="Junio";}
	if ($mes=="July") {$mes="Julio";}
	if ($mes=="August") {$mes="Agosto";}
	if ($mes=="September") {$mes="Septiembre";}
	if ($mes=="October") {$mes="Octubre";}
	if ($mes=="November") {$mes="Noviembre";}
	if ($mes=="December") {$mes="Diciembre";}
	$fecha=$dia." de ".$mes." del ".$any;
	return $fecha;
}

function ImprimeSO($SO) {
	echo "<select name=\"SO\">";
		echo "<option value=\"cualquiera\" ";
			if (strcmp($SO,"cualquiera"==0)) echo "selected >cualquiera</option>";
                        else echo ">cualquiera</option>";
        	echo "<option value=\"aix\" ";
			if (strcmp($SO,"aix")==0) echo " selected>aix</option>";
			else echo ">aix</option>";
		echo "<option value=\"beos\" ";
                        if (strcmp($SO,"beos")==0) echo " selected>beos</option>";
			else echo ">beos</option>";
		echo "<option value=\"bsdi\" ";
                        if (strcmp($SO,"bsdi")==0) echo " selected>bsdi</option>";
			else echo ">bsdi</option>";
		echo "<option value=\"freebsd\"";
                        if (strcmp($SO,"freebsd")==0) echo " selected>freebsd</option>";
			else echo ">freebsd</option>";
		echo "<option value=\"netbsd\" ";
                        if (strcmp($SO,"netbsd")==0) echo " selected>netbsd</option>";
			else echo ">netbsd</option>";
		echo "<option value=\"openbsd\" ";
                        if (strcmp($SO,"openbsd")==0) echo " selected>openbsd</option>";
			else echo ">openbsd</option>";
		echo "<option value=\"dgux\" ";
                        if (strcmp($SO,"dgux")==0) echo " selected>dgux/tru64</option>";
			else echo ">dgux/tru64</option>";
		echo "<option value=\"hpux\" ";
                        if (strcmp($SO,"hpux")==0) echo " selected>hpux</option>";
			else echo ">hpux</option>";
		echo "<option value=\"irix\" ";
                        if (strcmp($SO,"irix")==0) echo " selected>irix</option>";
			else echo ">irix</option>";
                echo "<option value=\"novell\" ";
                        if (strcmp($SO,"novell")==0) echo " selected>novell</option>";
			else echo ">novell netware</option>";
                echo "<option value=\"qnx\" ";
                        if (strcmp($SO,"qnx")==0) echo " selected>qnx</option>";
			else echo ">qnx</option>";
                echo "<option value=\"sco\" ";
                        if (strcmp($SO,"sco")==0) echo " selected>sco</option>";
			else echo ">sco</option>";
                echo "<option value=\"solaris\" ";
                        if (strcmp($SO,"solaris")==0) echo " selected>solaris</option>";
			else echo ">solaris</option>";
		echo "<option value=\"windows\" ";
                        if (strcmp($SO,"windows")==0) echo " selected>windows</option>";
			else echo ">windows</option>";
		echo "<option value=\"linux\" ";
                        if (strcmp($SO,"linux")==0) echo " selected>linux - genérico</option>";
			else echo ">linux - genérico</option>";
		echo "<option value=\"debian\" ";
                        if (strcmp($SO,"debian")==0) echo " selected>linux - debian</option>";
                        else echo ">linux - debian</option>";
		echo "<option value=\"slack\" ";
                        if (strcmp($SO,"slack")==0) echo " selected>linux - slackware</option>";
			else echo ">linux - slackware</option>";
                echo "<option value=\"redhat\" ";
                        if (strcmp($SO,"redhat")==0) echo " selected>linux - redhat</option>";
			else echo ">linux - redhat</option>";
		echo "<option value=\"suse\" ";
                        if (strcmp($SO,"suse")==0) echo " selected>linux - SuSE</option>";
			else echo ">linux - SuSE</option>";
		echo "<option value=\"mandrake\" ";
                        if (strcmp($SO,"mandrake")==0) echo " selected>linux - mandrake</option>";
			else echo "> linux - Mandrake</option>";
		echo "<option value=\"unix\" ";
                        if (strcmp($SO,"unix")==0) echo " selected>unix - genérico</option>";
		        else echo ">unix - genérico</option>";

	echo "</select>";
	
}

//imprime un select desplegable con los tipos de exploits
function ImprimeTipos($tipo) {
        echo "<select name=\"tipo\">";
		if (strcmp($tipo,"generico")==0) echo "<option value=\"generico\" selected>exploit genérico (demonio, programa, kernel, etc)</option>";
		else echo "<option value=\"genérico\">exploit genérico (demonio, programa, kernel, etc)</option>";
		if (strcmp($tipo,"cgi")==0) echo "<option value=\"cgi\" selected >CGI</option>";
                else echo "<option value=\"cgi\" >CGI</option>";

                if (strcmp($tipo,"dos")==0) echo "<option value=\"dos\" selected >Denegación de Servicio</option>";
                else echo "<option value=\"dos\">Denegación de Servicio</option>";

		if (strcmp($tipo,"hardware")==0) echo "<option value=\"hardware\" selected>hardware (router, firewall, etc.)</option>";
		else echo "<option value=\"hardware\" >hardware (router, firewall, etc.)</option>";

                if (strcmp($tipo,"cualquiera")==0) echo "<option value=\"cualquiera\" selected>cualquiera</option>";
		else echo "<option value=\"cualquiera\" >cualquiera</option>";
	echo "</select>";
}


function ImprimeArquitecturaSO ($arquitectura) {
	echo "<select name=\"arquitectura\">";
		if (strcmp($arquitectura,"x86")==0) echo "<option value=\"x86\" selected >x86</option>";
		else echo "<option value=\"x86\" >x86</option>";
                if (strcmp($arquitectura,"sparc")==0) echo "<option value=\"sparc\" selected >sparc</option>";
                else echo "<option value=\"sparc\" >sparc</option>";
                if (strcmp($arquitectura,"alpha")==0) echo "<option value=\"alpha\" selected >alpha</option>";
                else echo "<option value=\"alpha\">alpha</option>";
                if (strcmp($arquitectura,"cualquiera")==0) echo "<option value=\"cualquiera\" selected >cualquiera</option>";
                else echo "<option value=\"cualquiera\">cualquiera</option>";
	echo "</select>";
}


function ImprimeRemoto ($remoto) {
	if ($remoto==0) {
        	echo " no <input type=\"radio\" name=\"remoto\" value=\"1\" >
        	sí <input type=\"radio\" name=\"remoto\" value=\"0\" checked><br>";
	} else {
        	echo " no <input type=\"radio\" name=\"remoto\" value=\"1\" checked>
        	sí <input type=\"radio\" name=\"remoto\" value=\"0\"><br>";
	}
}

function ImprimeLenguaje ($lenguaje) {
        echo "<select name=\"lenguaje\">";
	if (strcmp($lenguaje,"c")==0) echo "<option value=\"c\" selected >c</option>";
                else echo "<option value=\"c\">c</option>";	
	if (strcmp($lenguaje,"perl")==0) echo "<option value=\"perl\" selected >perl</option>";
		else echo "<option value=\"perl\">perl</option>";
        if (strcmp($lenguaje,"java")==0) echo "<option value=\"java\" selected >java</option>";
                else echo "<option value=\"java\">java</option>";
        if (strcmp($lenguaje,"cualquiera")==0) echo "<option value=\"cualquiera\" selected >cualquiera</option>";
                else echo "<option value=\"cualquiera\">cualquiera</option>";
        echo "</select>";
}

function DevuelveDatosExploit ($idexploit) {
        $query=mysql_query("select * from exploits where idexploit='$idexploit'") or die (mysql_error());
        $row=mysql_fetch_array($query);
        return ($row);
}

function ImprimeFooterSiguientes ($total,$inicio,$siguientes,$exploitsMostrats) {
	$inici=$inicio-$siguientes+1;
	if ($total<$exploitsMostrats) $exploitsMostrats=$total;
	echo "Mostrando resultados $inici a $exploitsMostrats de $total<br>";
	$exploitsMostrats=$exploitsMostrats+$siguientes;
	if ($inicio>$siguientes) echo "<a href=\"javascript:history.back(-1)\">  página anterior</a>";
	if (($inicio>$siguientes) && ($exploitsMostrats-$siguientes<$total)) echo " | ";
	if ($exploitsMostrats-$siguientes<$total) echo "<a href=\"search.php?inicio=$inicio&siguientes=$siguientes&exploitsMostrats=$exploitsMostrats\">próxima página  </a>";
}

?>
