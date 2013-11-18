<?php

include 'capcelera.php';

$link= mysql_connect("localhost","mundodisea","athi3") or die ("no puc conectar a localhost :(");
mysql_select_db("mundodisea_db", $link) or die ("no puc conectar a la base de dades");

$busca=mysql_query("select * from apunts where (comentari like '%$keyword%')  or (comanda like '%$keyword%')") or die ("no puedo buscar en la base de ".mysql_error());

while ($encontrado=mysql_fetch_row($busca)) {
  $idapunt=$encontrado[0];
}

// die ("id es $idapunt");

$result = mysql_query("SELECT * FROM apunt where idapunt='$idapunt'") or die ("<br><center>meeec $result sux");



$registres=mysql_num_rows($result);
 echo "
        <font face =\"helvetica\" size =\"6\"><b align = \"left\">$nom_categoria</b></font> <br><br>

       <p> S'han trobat <b>$registres</b> apunts referents a <i>$keyword</i>

        <br><br> <br><br>
";

while ($apunt=mysql_fetch_row($result)) {

        echo "   <table  border=\"1\" cellspacing=\"3\" width=\"100%\">
                <tr>

                <center>
                <br>
                <br>
                <tr>
                <td align=\"left\" bgcolor=#336699><pre>$result[2]</pre>
                <td align=\"left\" bgcolor=#336699><pre>$result[3]</pre>
                <td bgcolor=#336699> <a href=\"borrar.php?idapunt=$columna[0]\">borrar</a>
                <td bgcolor=#336699> <a href=\"update.php?idapunt=$columna[0]\">modificar</a>
                </table>

        <table  bgcolor=#336699 border=\"0\" cellspacing=\"3\" height=\"50\">
                <tr>
                <td><a href=\"insert.php\">inserir un nou registre</a>
                <td><a href=\"index.php\">buscar</a>
                <td><a href=\"/index.html\">mundodisea</a>
        </table>
";

}
?>

