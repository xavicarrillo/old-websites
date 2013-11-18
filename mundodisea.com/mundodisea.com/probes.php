<?

$link=mysql_connect ("localhost","mundodisea","athi3") or die ("no puc conectar a localhost");
echo "localhost accedit";

$bbdd=mysql_select_db("mundodisea_db",$link) or die ("no puc accedir a la bbdd");
echo "mundodisea accedida";

$taules=mysql_list_tables ("mundodisea_db") or die ("sux");

for ($i = 0; $i < ((mysql_num_rows($taules))+1); $i++) {
    $tb_names[$i] = mysql_tablename($taules, $i);
    echo $tb_names[$i] . "<BR>";
}

?>
