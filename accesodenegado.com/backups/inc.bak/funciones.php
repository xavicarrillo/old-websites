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


function QueSO($idSO) {
	$query=mysql_query("select * from SO where idSO=$idSO")  or die (mysql_error());
	while ($SOs=mysql_fetch_row($query)) {
        	$SO=$SOs[1];
	}
	return $SO;
}

function QueLenguaje($idlenguaje) {
        $query=mysql_query("select * from lenguaje where idlenguaje='$idlenguaje'") or die (mysql_error());
        while ($row=mysql_fetch_row($query)) {
		$lenguaje=$row[1];
	}
	return $lenguaje;
}


//imprime un select desplegable con los tipos de exploits
function ImprimeTipos($TipoSeleccionado) {
	echo "<select name=\"tipo\">";
	$query=mysql_query("select * from TipoExploit")  or die (mysql_error());
        while ($tipos=mysql_fetch_row($query)) {
		echo " <option value=\"$tipos[0]\" ";
		if (!strcmp($TipoSeleccionado,$tipos[0])) echo "selected>$tipos[1]</option>";
		else echo ">$tipos[1]</option>";
        }
	echo "</select>";
}


function ImprimeSO($idSO) {
	echo "<select name=\"idSO\">";
	
	$query=mysql_query("select * from SO order by SO") or die (mysql_error());
	while ($SO=mysql_fetch_row($query)) {
        	echo "<option value=\"$SO[0]\" ";
		if ($idSO==$SO[0]) echo "selected>$SO[1]</option>";
		else echo ">$SO[1]</option>";
	}
	echo "</select>";
}

function ImprimeArquitecturaSO ($idarquitectura) {
	echo "<select name=\"idarquitectura\">";
        $query=mysql_query("select * from arquitecturaSO") or die (mysql_error());
        while ($arquitectura=mysql_fetch_row($query)) {
		echo "<option value=\"$arquitectura[0]\" ";
		if ($idarquitectura==$arquitectura[0]) echo "selected>$arquitectura[1]</option>";
                else echo ">$arquitectura[1]</option>";
        }
        echo "</select>";
}


function QueArquitectura($idarquitectura) {
        $query=mysql_query("select * from arquitecturaSO where idarquitectura=$idarquitectura") or die (mysql_error());
        while ($row=mysql_fetch_row($query)) {
		$arquitectura=$row[1];
	}
	return $arquitectura;
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

function ImprimeLenguaje ($idlenguaje) {
        echo "<select name=\"idlenguaje\">";
        $query=mysql_query("select * from lenguaje order by lenguaje") or die (mysql_error());
        while ($row=mysql_fetch_row($query)) {
                echo "<option value=\"$row[0]\" ";
                if ($idlenguaje==$row[0]) echo "selected>$row[1]</option>";
                else echo ">$row[1]</option>";
        }
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
