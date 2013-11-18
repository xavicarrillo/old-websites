<?php
/* $Id: db_details.php,v 1.24 2000/07/13 15:12:48 tobias Exp $ */

if(!isset($message))
{
    include("header.inc.php");
}
else
{
    show_message($message);
}

$tables = mysql_list_tables($db);
$num_tables = @mysql_numrows($tables);

if($num_tables == 0)
{
    echo $strNoTablesFound;
}
else
{
    $i = 0;

    echo "<table border=$cfgBorder>\n";
    echo "<th>$strTable</th>";
    echo "<th colspan=6>$strAction</th>";
    echo "<th>$strRecords</th>";
    while($i < $num_tables)
    {
        $table = mysql_tablename($tables, $i);
        $query = "?server=$server&db=$db&table=$table&goto=db_details.php";
        $bgcolor = $cfgBgcolorOne;
        $i % 2  ? 0: $bgcolor = $cfgBgcolorTwo;
        ?>
           <tr bgcolor="<?php echo $bgcolor;?>">

           <td class=data><b><?php echo $table;?></b></td>
           <td><a href="sql.php<?php echo $query;?>&sql_query=<?php echo urlencode("SELECT * FROM $table");?>&pos=0"><?php echo $strBrowse; ?></a></td>
           <td><a href="tbl_select.php<?php echo $query;?>"><?php echo $strSelect; ?></a></td>
           <td><a href="tbl_change.php<?php echo $query;?>"><?php echo $strInsert; ?></a></td>
           <td><a href="tbl_properties.php<?php echo $query;?>"><?php echo $strProperties; ?></a></td>
           <td><a href="sql.php<?php echo $query;?>&reload=true&sql_query=<?php echo urlencode("DROP TABLE $table");?>&zero_rows=<?php echo urlencode($strTable." ".$table." ".$strHasBeenDropped);?>"><?php echo $strDrop; ?></a></td>
           <td><a href="sql.php<?php echo $query;?>&sql_query=<?php echo urlencode("DELETE FROM $table");?>&zero_rows=<?php echo urlencode($strTable." ".$table." ".$strHasBeenEmptied);?>"><?php echo $strEmpty; ?></a></td>
           <td align="right">&nbsp;<?php count_records($db,$table) ?></td>
         </tr>
        <?php
        $i++;
    }

    echo "</table>\n";
}
$query = "?server=$server&db=$db&goto=db_details.php";
?>
<hr>
<div align="left">
<ul>
<li><a href="db_printview.php<?php echo $query;?>"><?php echo $strPrintView;?></a>
<li>
<form method="post" action="db_readdump.php" enctype="multipart/form-data">
<input type="hidden" name="server" value="<?php echo $server;?>">
<input type="hidden" name="pos" value="0">
<input type="hidden" name="db" value="<?php echo $db;?>">
<input type="hidden" name="goto" value="db_details.php?db=<?php echo $db;?>">
<input type="hidden" name="zero_rows" value="<?php echo $strSuccess; ?>">
<?php echo $strRunSQLQuery.$db." ".show_docu("manual_Reference.html#Select");?>:<br>
<textarea name="sql_query" cols="40" rows="3" wrap="VIRTUAL" style="width: <?php
echo $cfgMaxInputsize;?>"></textarea><br>
<?php echo "<i>$strOr</i> $strLocationTextfile";?>:<br>
<input type="file" name="sql_file"><br>
<input type="submit" name="SQL" value="<?php echo $strGo; ?>">
</form>
<li><a href="tbl_qbe.php<?php echo $query;?>"><?php echo $strQBE;?></a>
<li><form method="post" action="db_dump.php"><?php echo $strViewDumpDB;?><br>
<table>
    <tr>
        <td>
            <input type="radio" name="what" value="structure" checked><?php echo $strStrucOnly;?>
        </td>
        <td>
            <input type="checkbox" name="drop" value="1"><?php echo $strStrucDrop;?>
        </td>
        <td colspan="2">
            <input type="submit" value="<?php echo $strGo;?>">
        </td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="what" value="data"><?php echo $strStrucData;?>
        </td>
        <td>
            <input type="checkbox" name="asfile" value="sendit"><?php echo $strSend;?>
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
           <input type="checkbox" name="showcolumns" value="yes"><?php echo $strCompleteInserts; ?>
        </td>
    </tr>
</table>
<input type="hidden" name="server" value="<?php echo $server;?>">
<input type="hidden" name="db" value="<?php echo $db;?>">
</form>
<li>
<form method="post" action="tbl_create.php">
<input type="hidden" name="server" value="<?php echo $server;?>">
<input type="hidden" name="db" value="<?php echo $db;?>">
<?php echo $strCreateNewTable.$db;?>:<br>
<?php echo $strName.":"; ?> <input type="text" name="table"><br>
<?php echo $strFields.":"; ?> <input type="text" name="num_fields" size=2>
<input type="submit" value="<?php echo $strGo; ?>">
</form>

<li>
<a href="sql.php?server=<?php echo $server;?>&db=<?php echo $db;?>&sql_query=<?php echo urlencode("DROP DATABASE $db");?>&zero_rows=<?php echo urlencode($strDatabase." ".$db." ".$strHasBeenDropped);?>&goto=main.php&reload=true"><?php echo $strDropDB." ".$db;?></a> <?php print show_docu("manual_Reference.html#Drop_database");?>
</ul>
</div>
<?php

require ("footer.inc.php");
?>