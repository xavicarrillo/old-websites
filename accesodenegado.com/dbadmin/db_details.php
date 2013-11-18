<?php
/* $Id: db_details.php,v 1.146 2002/04/14 20:57:37 loic1 Exp $ */

/**
 * Gets some core libraries
 */
require('./libraries/grab_globals.lib.php');
require('./libraries/common.lib.php');
require('./libraries/bookmark.lib.php');


/**
 * Defines the urls to return to in case of error in a sql statement
 */
$err_url_0 = 'main.php'
           . '?lang=' . $lang
           . '&amp;server=' . $server;
$err_url   = 'db_details.php'
           . '?lang=' . $lang
           . '&amp;server=' . $server
           . '&amp;db=' . urlencode($db);


/**
 * Ensures the database exists (else move to the "parent" script) and displays
 * headers
 */
if (!isset($is_db) || !$is_db) {
    // Not a valid db name -> back to the welcome page
    if (!empty($db)) {
        $is_db = @mysql_select_db($db);
    }
    if (empty($db) || !$is_db) {
        header('Location: ' . $cfgPmaAbsoluteUri . 'main.php?lang=' . $lang . '&server=' . $server . (isset($message) ? '&message=' . urlencode($message) : '') . '&reload=1');
        exit();
    }
} // end if (ensures db exists)

// Displays headers
if (!isset($message)) {
    $js_to_run = 'functions.js';
    include('./header.inc.php');
    // Reloads the navigation frame via JavaScript if required
    if (isset($reload) && $reload) {
        echo "\n";
        ?>
<script type="text/javascript" language="javascript1.2">
<!--
window.parent.frames['nav'].location.replace('./left.php?lang=<?php echo $lang; ?>&server=<?php echo $server; ?>&db=<?php echo urlencode($db); ?>');
//-->
</script>
        <?php
    }
    echo "\n";
} else {
    PMA_showMessage($message);
}


/**
 * Drop/delete multiple tables if required
 */
if ((!empty($submit_mult) && isset($selected_tbl))
    || isset($mult_btn)) {
    $action = 'db_details.php';
    include('./mult_submits.inc.php');
}


/**
 * Gets the list of the table in the current db and informations about these
 * tables if possible
 */
// staybyte: speedup view on locked tables - 11 June 2001
if (PMA_MYSQL_INT_VERSION >= 32303) {
    // Special speedup for newer MySQL Versions (in 4.0 format changed)
    if ($cfgSkipLockedTables == TRUE && PMA_MYSQL_INT_VERSION >= 32330) {
        $local_query  = 'SHOW OPEN TABLES FROM ' . PMA_backquote($db);
        $result       = mysql_query($local_query) or PMA_mysqlDie('', $local_query, '', $err_url_0);
        // Blending out tables in use
        if ($result != FALSE && mysql_num_rows($result) > 0) {
            while ($tmp = mysql_fetch_row($result)) {
                // if in use memorize tablename
                if (eregi('in_use=[1-9]+', $tmp[1])) {
                    $sot_cache[$tmp[0]] = TRUE;
                }
            }
            mysql_free_result($result);

            if (isset($sot_cache)) {
                $local_query = 'SHOW TABLES FROM ' . PMA_backquote($db);
                $result      = mysql_query($local_query) or PMA_mysqlDie('', $local_query, '', $err_url_0);
                if ($result != FALSE && mysql_num_rows($result) > 0) {
                    while ($tmp = mysql_fetch_row($result)) {
                        if (!isset($sot_cache[$tmp[0]])) {
                            $local_query = 'SHOW TABLE STATUS FROM ' . PMA_backquote($db) . ' LIKE \'' . addslashes($tmp[0]) . '\'';
                            $sts_result  = mysql_query($local_query) or PMA_mysqlDie('', $local_query, '', $err_url_0);
                            $sts_tmp     = mysql_fetch_array($sts_result);
                            $tables[]    = $sts_tmp;
                        } else { // table in use
                            $tables[]    = array('Name' => $tmp[0]);
                        }
                    }
                    mysql_free_result($result);
                    $sot_ready = TRUE;
                }
            }
        }
    }
    if (!isset($sot_ready)) {
        $local_query = 'SHOW TABLE STATUS FROM ' . PMA_backquote($db);
        $result      = mysql_query($local_query) or PMA_mysqlDie('', $local_query, '', $err_url_0);
        if ($result != FALSE && mysql_num_rows($result) > 0) {
            while ($sts_tmp = mysql_fetch_array($result)) {
                $tables[] = $sts_tmp;
            }
            mysql_free_result($result);
        }
    }
    $num_tables = (isset($tables) ? count($tables) : 0);
} // end if (PMA_MYSQL_INT_VERSION >= 32303)
else {
    $result     = mysql_list_tables($db);
    $num_tables = @mysql_numrows($result);
    for ($i = 0; $i < $num_tables; $i++) {
        $tables[] = mysql_tablename($result, $i);
    }
    mysql_free_result($result);
}


/**
 * Displays an html table with all the tables contained into the current
 * database
 */
?>

<!-- TABLE LIST -->

<?php
// 1. No tables
if ($num_tables == 0) {
    echo $strNoTablesFound . "\n";
}

// 2. Shows table informations on mysql >= 3.23.03 - staybyte - 11 June 2001
else if (PMA_MYSQL_INT_VERSION >= 32303) {
    ?>
<form method="post" action="db_details.php" name="tablesForm">
    <input type="hidden" name="lang" value="<?php echo $lang; ?>" />
    <input type="hidden" name="server" value="<?php echo $server; ?>" />
    <input type="hidden" name="db" value="<?php echo $db; ?>" />

<table border="<?php echo $cfgBorder; ?>">
<tr>
    <td></td>
    <th>&nbsp;<?php echo ucfirst($strTable); ?>&nbsp;</th>
    <th colspan="6"><?php echo ucfirst($strAction); ?></th>
    <th><?php echo ucfirst($strRecords); ?></th>
    <th><?php echo ucfirst($strType); ?></th>
    <?php
    if ($cfgShowStats) {
        echo '<th>' . ucfirst($strSize) . '</th>';
    }
    echo "\n";
    ?>
</tr>
    <?php
    $i = $sum_entries = $sum_size = 0;
    $checked = (!empty($checkall) ? ' checked="checked"' : '');
    while (list($keyname, $sts_data) = each($tables)) {
        $table     = $sts_data['Name'];
        // Sets parameters for links
        $url_query = 'lang=' . $lang
                   . '&amp;server=' . $server
                   . '&amp;db=' . urlencode($db)
                   . '&amp;table=' . urlencode($table)
                   . '&amp;goto=db_details.php';
        $bgcolor   = ($i++ % 2) ? $cfgBgcolorOne : $cfgBgcolorTwo;
        echo "\n";
        ?>
<tr>
    <td align="center" bgcolor="<?php echo $bgcolor; ?>">
        <input type="checkbox" name="selected_tbl[]" value="<?php echo urlencode($table); ?>" id="checkbox_tbl_<?php echo urlencode($table); ?>"<?php echo $checked; ?> />
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>" nowrap="nowrap">
        &nbsp;<b><label for="checkbox_tbl_<?php echo urlencode($table); ?>"><?php echo htmlspecialchars($table); ?></label>&nbsp;</b>&nbsp;
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>">
        <?php
        if (!empty($sts_data['Rows'])) {
            echo '<a href="sql.php?' . $url_query . '&amp;sql_query='
                 . urlencode('SELECT * FROM ' . PMA_backquote($table))
                 . '&amp;pos=0">' . $strBrowse . '</a>';
        } else {
            echo $strBrowse;
        }
        ?>
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>">
        <?php
        if (!empty($sts_data['Rows'])) {
            echo '<a href="tbl_select.php?' . $url_query . '">'
                 . $strSelect . '</a>';
        } else {
            echo $strSelect;
        }
        ?>
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>">
        <a href="tbl_change.php?<?php echo $url_query; ?>">
            <?php echo $strInsert; ?></a>
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>">
        <a href="tbl_properties.php?<?php echo $url_query; ?>">
            <?php echo $strProperties; ?></a>
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>">
        <a href="sql.php?<?php echo $url_query; ?>&amp;reload=1&amp;sql_query=<?php echo urlencode('DROP TABLE ' . PMA_backquote($table)); ?>&amp;zero_rows=<?php echo urlencode(sprintf($strTableHasBeenDropped, htmlspecialchars($table))); ?>"
            onclick="return confirmLink(this, 'DROP TABLE <?php echo PMA_jsFormat($table); ?>')">
            <?php echo $strDrop; ?></a>
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>">
        <?php
        if (!empty($sts_data['Rows'])) {
            echo '<a href="sql.php?' . $url_query
                 . '&amp;sql_query='
                 . urlencode('DELETE FROM ' . PMA_backquote($table))
                 . '&amp;zero_rows='
                 . urlencode(sprintf($strTableHasBeenEmptied, htmlspecialchars($table)))
                 . '" onclick="return confirmLink(this, \'DELETE FROM ' . PMA_jsFormat($table) . '\')">' . $strEmpty . '</a>';
        } else {
             echo $strEmpty;
        }
        ?>
    </td>
        <?php
        echo "\n";

        // loic1: Patch from Joshua Nye <josh at boxcarmedia.com> to get valid
        //        statistics whatever is the table type
        if (isset($sts_data['Rows'])) {
            // MyISAM, ISAM or Heap table: Row count, data size and index size
            // is accurate.
            if (isset($sts_data['Type']) && ereg('^(MyISAM|ISAM|HEAP)$', $sts_data['Type'])) {
                if ($cfgShowStats) {
                    $tblsize                    =  $sts_data['Data_length'] + $sts_data['Index_length'];
                    $sum_size                   += $tblsize;
                    list($formated_size, $unit) =  PMA_formatByteDown($tblsize, 3, ($tblsize > 0) ? 1 : 0);
                }
                $sum_entries                    += $sts_data['Rows'];
                $display_rows                   =  number_format($sts_data['Rows'], 0, $number_decimal_separator, $number_thousands_separator);
            }

            // InnoDB table: Row count is not accurate but data and index
            // sizes are.
            else if (isset($sts_data['Type']) && $sts_data['Type'] == 'InnoDB') {
                if ($cfgShowStats) {
                    $tblsize                    =  $sts_data['Data_length'] + $sts_data['Index_length'];
                    $sum_size                   += $tblsize;
                    list($formated_size, $unit) =  PMA_formatByteDown($tblsize, 3, ($tblsize > 0) ? 1 : 0);
                }
                $display_rows                   =  '&nbsp;-&nbsp;';
            }

            // Merge or BerkleyDB table: Only row count is accurate.
            else if (isset($sts_data['Type']) && ereg('^(MRG_MyISAM|BerkeleyDB)$', $sts_data['Type'])) {
                if ($cfgShowStats) {
                    $formated_size              =  '&nbsp;-&nbsp;';
                    $unit                       =  '';
                }
                $sum_entries                    += $sts_data['Rows'];
                $display_rows                   =  number_format($sts_data['Rows'], 0, $number_decimal_separator, $number_thousands_separator);
            }

            // Unknown table type.
            else {
                if ($cfgShowStats) {
                    $formated_size              =  'unknown';
                    $unit                       =  '';
                }
                $display_rows                   =  'unknown';
            }
            ?>
    <td align="right" bgcolor="<?php echo $bgcolor; ?>">
            <?php
            echo "\n" . '        ' . $display_rows . "\n";
            ?>
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>" nowrap="nowrap">
        &nbsp;<?php echo (isset($sts_data['Type']) ? $sts_data['Type'] : '&nbsp;'); ?>&nbsp;
    </td>
            <?php
            if ($cfgShowStats) {
                echo "\n";
                ?>
    <td align="right" bgcolor="<?php echo $bgcolor; ?>" nowrap="nowrap">
        &nbsp;&nbsp;
        <a href="tbl_properties.php?<?php echo $url_query; ?>#showusage"><?php echo $formated_size . ' ' . $unit; ?></a>
    </td>
                <?php
                echo "\n";
            } // end if
        } else {
            ?>
    <td colspan="3" align="center" bgcolor="<?php echo $bgcolor; ?>">
        <?php echo $strInUse . "\n"; ?>
    </td>
            <?php
        }
        echo "\n";
        ?>
</tr>
        <?php
    }
    // Show Summary
    if ($cfgShowStats) {
        list($sum_formated, $unit) = PMA_formatByteDown($sum_size, 3, 1);
    }
    echo "\n";
    ?>
<tr>
    <td></td>
    <th align="center" nowrap="nowrap">
        &nbsp;<b><?php echo sprintf($strTables, number_format($num_tables, 0, $number_decimal_separator, $number_thousands_separator)); ?></b>&nbsp;
    </th>
    <th colspan="6" align="center">
        <b><?php echo $strSum; ?></b>
    </th>
    <th align="right" nowrap="nowrap">
        <b><?php echo number_format($sum_entries, 0, $number_decimal_separator, $number_thousands_separator); ?></b>
    </th>
    <th align="center">
        <b>--</b>
    </th>
    <?php
    if ($cfgShowStats) {
        echo "\n";
        ?>
    <th align="right" nowrap="nowrap">
        &nbsp;
        <b><?php echo $sum_formated . ' ' . $unit; ?></b>
    </th>
        <?php
    }
    echo "\n";
    ?>
</tr>

    <?php
    // Check all tables url
    $checkall_url = 'db_details.php'
                  . '?lang=' . $lang
                  . '&amp;server=' . $server
                  . '&amp;db=' . urlencode($db);
    echo "\n";
    ?>
<tr>
    <td colspan="<?php echo (($cfgShowStats) ? '11' : '10'); ?>" valign="bottom">
        <img src="./images/arrow_<?php echo $text_dir; ?>.gif" border="0" width="38" height="22" alt="<?php echo $strWithChecked; ?>" />
        <a href="<?php echo $checkall_url; ?>&amp;checkall=1" onclick="setCheckboxes('tablesForm', true); return false;">
            <?php echo $strCheckAll; ?></a>
        &nbsp;/&nbsp;
        <a href="<?php echo $checkall_url; ?>" onclick="setCheckboxes('tablesForm', false); return false;">
            <?php echo $strUncheckAll; ?></a>
        &nbsp;&nbsp;&nbsp;
        <img src="./images/spacer.gif" border="0" width="38" height="1" alt="" />
        <select name="submit_mult" dir="ltr" onchange="this.form.submit();">
    <?php
    echo "\n";
    echo '            <option value="' . $strWithChecked . '" selected="selected">'
         . $strWithChecked . '</option>' . "\n";
    echo '            <option value="' . $strDrop . '" >'
         . $strDrop . '</option>' . "\n";
    echo '            <option value="' . $strEmpty . '" >'
         . $strEmpty . '</option>' . "\n";
    echo '            <option value="' . $strPrintView . '" >'
         . $strPrintView . '</option>' . "\n";
    echo '            <option value="' . $strOptimizeTable . '" >'
         . $strOptimizeTable . '</option>' . "\n";
    ?>
        </select>
        <script type="text/javascript" language="javascript">
        <!--
        // Fake js to allow the use of the <noscript> tag
        //-->
        </script>
        <noscript>
            <input type="submit" value="<?php echo $strGo; ?>" />
        </noscript>
    </td>
</tr>
</table>

</form>
    <?php
} // end case mysql >= 3.23.03

// 3. Shows tables list mysql < 3.23.03
else {
    $i = 0;
    echo "\n";
    ?>
<form action="db_details.php">
    <input type="hidden" name="lang" value="<?php echo $lang; ?>" />
    <input type="hidden" name="server" value="<?php echo $server; ?>" />
    <input type="hidden" name="db" value="<?php echo $db; ?>" />

<table border="<?php echo $cfgBorder; ?>">
<tr>
    <td></td>
    <th>&nbsp;<?php echo ucfirst($strTable); ?>&nbsp;</th>
    <th colspan="6"><?php echo ucfirst($strAction); ?></th>
    <th><?php echo ucfirst($strRecords); ?></th>
</tr>
    <?php
    $checked = (!empty($checkall) ? ' checked="checked"' : '');
    while ($i < $num_tables) {
        // Sets parameters for links
        $url_query = 'lang=' . $lang
                   . '&amp;server=' . $server
                   . '&amp;db=' . urlencode($db)
                   . '&amp;table=' . urlencode($tables[$i])
                   . '&amp;goto=db_details.php';
        $bgcolor   = ($i % 2) ? $cfgBgcolorOne : $cfgBgcolorTwo;
        echo "\n";
        ?>
<tr>
    <td align="center" bgcolor="<?php echo $bgcolor; ?>">
        <input type="checkbox" name="selected_tbl[]" value="<?php echo urlencode($tables[$i]); ?>" id="checkbox_tbl_<?php echo urlencode($tables[$i]); ?>"<?php echo $checked; ?> />
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>" class="data">
        <b>&nbsp;<label for="checkbox_tbl_<?php echo urlencode($table); ?>"><?php echo $tables[$i]; ?></label>&nbsp;</b>
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>">
        <a href="sql.php?<?php echo $url_query; ?>&amp;sql_query=<?php echo urlencode('SELECT * FROM ' . PMA_backquote($tables[$i])); ?>&amp;pos=0"><?php echo $strBrowse; ?></a>
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>">
        <a href="tbl_select.php?<?php echo $url_query; ?>"><?php echo $strSelect; ?></a>
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>">
        <a href="tbl_change.php?<?php echo $url_query; ?>"><?php echo $strInsert; ?></a>
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>">
        <a href="tbl_properties.php?<?php echo $url_query; ?>"><?php echo $strProperties; ?></a>
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>">
        <a href="sql.php?<?php echo $url_query; ?>&amp;reload=1&amp;sql_query=<?php echo urlencode('DROP TABLE ' . PMA_backquote($tables[$i])); ?>&amp;zero_rows=<?php echo urlencode(sprintf($strTableHasBeenDropped, htmlspecialchars($tables[$i]))); ?>"><?php echo $strDrop; ?></a>
    </td>
    <td bgcolor="<?php echo $bgcolor; ?>">
        <a href="sql.php?<?php echo $url_query; ?>&amp;sql_query=<?php echo urlencode('DELETE FROM ' . PMA_backquote($tables[$i])); ?>&amp;zero_rows=<?php echo urlencode(sprintf($strTableHasBeenEmptied, htmlspecialchars($tables[$i]))); ?>"><?php echo $strEmpty; ?></a>
    </td>
    <td align="right" bgcolor="<?php echo $bgcolor; ?>">
        <?php PMA_countRecords($db, $tables[$i]); echo "\n"; ?>
    </td>
</tr>
        <?php
        $i++;
    } // end while
    echo "\n";

    // Check all tables url
    $checkall_url = 'db_details.php'
                  . '?lang=' . $lang
                  . '&amp;server=' . $server
                  . '&amp;db=' . urlencode($db);
    ?>
<tr>
    <td colspan="9">
        <img src="./images/arrow_<?php echo $text_dir; ?>.gif" border="0" width="38" height="22" alt="<?php echo $strWithChecked; ?>" />
        <a href="<?php echo $checkall_url; ?>&amp;checkall=1" onclick="setCheckboxes('tablesForm', true); return false;">
            <?php echo $strCheckAll; ?></a>
        &nbsp;/&nbsp;
        <a href="<?php echo $checkall_url; ?>" onclick="setCheckboxes('tablesForm', false); return false;">
            <?php echo $strUncheckAll; ?></a>
    </td>
</tr>

<tr>
    <td colspan="9">
        <img src="./images/spacer.gif" border="0" width="38" height="1" alt="" />
        <i><?php echo $strWithChecked; ?></i>&nbsp;&nbsp;
        <input type="submit" name="submit_mult" value="<?php echo $strDrop; ?>" />
        &nbsp;<?php $strOr . "\n"; ?>&nbsp;
        <input type="submit" name="submit_mult" value="<?php echo $strEmpty; ?>" />
    </td>
</tr>
</table>

</form>
    <?php
} // end case mysql < 3.23.03

echo "\n";
?>
<hr />


<?php
/**
 * Database work
 */
$url_query = 'lang=' . $lang
           . '&amp;server=' . $server
           . '&amp;db=' . urlencode($db)
           . '&amp;goto=db_details.php';
if (isset($show_query) && $show_query == 'y') {
    // This script has been called by read_dump.php
    if (isset($sql_query_cpy)) {
        $query_to_display = $sql_query_cpy;
    }
    // Other cases
    else if (get_magic_quotes_gpc()) {
        $query_to_display = stripslashes($sql_query);
    }
    else {
        $query_to_display = $sql_query;
    }
} else {
    $query_to_display     = '';
}
?>
<!-- DATABASE WORK -->
<ul>
<?php
if ($num_tables > 0) {
    ?>
    <!-- Printable view of a table -->
    <li>
        <div style="margin-bottom: 10px"><a href="db_printview.php?<?php echo $url_query; ?>"><?php echo $strPrintView; ?></a></div>
    </li>
    <?php
}

// loic1: defines wether file upload is available or not
$is_upload = (PMA_PHP_INT_VERSION >= 40000 && function_exists('ini_get'))
           ? ((strtolower(ini_get('file_uploads')) == 'on' || ini_get('file_uploads') == 1) && intval(ini_get('upload_max_filesize')))
           // loic1: php 3.0.15 and lower bug -> always enabled
           : (PMA_PHP_INT_VERSION < 30016 || intval(@get_cfg_var('upload_max_filesize')));
?>

    <!-- Query box, sql file loader and bookmark support -->
    <li>
        <a name="querybox"></a>
        <form method="post" action="read_dump.php"<?php if ($is_upload) echo ' enctype="multipart/form-data"'; echo "\n"; ?>
            onsubmit="return checkSqlQuery(this)">
            <input type="hidden" name="is_js_confirmed" value="0" />
            <input type="hidden" name="lang" value="<?php echo $lang; ?>" />
            <input type="hidden" name="server" value="<?php echo $server; ?>" />
            <input type="hidden" name="db" value="<?php echo $db; ?>" />
            <input type="hidden" name="pos" value="0" />
            <input type="hidden" name="goto" value="db_details.php" />
            <input type="hidden" name="zero_rows" value="<?php echo htmlspecialchars($strSuccess); ?>" />
            <input type="hidden" name="prev_sql_query" value="<?php echo ((!empty($query_to_display)) ? urlencode($query_to_display) : ''); ?>" />
            <?php echo sprintf($strRunSQLQuery, $db) . ' ' . PMA_showDocuShort('S/E/SELECT.html'); ?>&nbsp;:<br />
            <div style="margin-bottom: 5px">
<textarea name="sql_query" cols="<?php echo $cfgTextareaCols; ?>" rows="<?php echo $cfgTextareaRows; ?>" wrap="virtual"
    onfocus="if (typeof(document.layers) == 'undefined' || typeof(textarea_selected) == 'undefined') {textarea_selected = 1; this.form.elements['sql_query'].select();}">
<?php echo ((!empty($query_to_display)) ? htmlspecialchars($query_to_display) : ''); ?>
</textarea><br />
            <input type="checkbox" name="show_query" value="y" id="checkbox_show_query" checked="checked" />&nbsp;
                <label for="checkbox_show_query"><?php echo $strShowThisQuery; ?></label><br />
            </div>
<?php
// loic1: displays import dump feature only if file upload available
if ($is_upload) {
    echo '            <i>' . $strOr . '</i> ' . $strLocationTextfile . '&nbsp;:<br />' . "\n";
    ?>
            <div style="margin-bottom: 5px">
            <input type="file" name="sql_file" class="textfield" /><br />
            </div>
    <?php
} // end if
echo "\n";

// Bookmark Support
if ($cfgBookmark['db'] && $cfgBookmark['table']) {
    if (($bookmark_list = PMA_listBookmarks($db, $cfgBookmark)) && count($bookmark_list) > 0) {
        echo "            <i>$strOr</i> $strBookmarkQuery&nbsp;:<br />\n";
        echo '            <div style="margin-bottom: 5px">' . "\n";
        echo '            <select name="id_bookmark">' . "\n";
        echo '                <option value=""></option>' . "\n";
        while (list($key, $value) = each($bookmark_list)) {
            echo '                <option value="' . $value . '">' . htmlentities($key) . '</option>' . "\n";
        }
        echo '            </select>' . "\n";
        echo '            <input type="radio" name="action_bookmark" value="0" id="radio_bookmark0" checked="checked" style="vertical-align: middle" /><label for="radio_bookmark0">' . $strSubmit . '</label>' . "\n";
        echo '            &nbsp;<input type="radio" name="action_bookmark" value="1" id="radio_bookmark1" style="vertical-align: middle" /><label for="radio_bookmark1">' . $strBookmarkView . '</label>' . "\n";
        echo '            &nbsp;<input type="radio" name="action_bookmark" value="2" id="radio_bookmark2" style="vertical-align: middle" /><label for="radio_bookmark2">' . $strDelete . '</label>' . "\n";
        echo '            <br />' . "\n";
        echo '            </div>' . "\n";
    }
}

// Encoding setting form appended by Y.Kawada
if (function_exists('PMA_set_enc_form')) {
    echo PMA_set_enc_form('            ');
}
?>
            <input type="submit" name="SQL" value="<?php echo $strGo; ?>" />
        </form>
    </li>


<?php
/**
 * Query by example and dump of the db
 * Only displayed if there is at least one table in the db
 */
if ($num_tables > 0) {
    ?>
    <!-- Query by an example -->
    <li>
        <div style="margin-bottom: 10px"><a href="tbl_qbe.php?<?php echo $url_query; ?>"><?php echo $strQBE; ?></a></div>
    </li>

    <!-- Dump of a database -->
    <li>
        <a name="dumpdb"></a>
        <form method="post" action="tbl_dump.php" name="db_dump">
        <?php echo $strViewDumpDB; ?><br />
        <table>
        <tr>
    <?php
    $colspan    = '';
    // loic1: already defined at the top of the script!
    // $tables     = mysql_list_tables($db);
    // $num_tables = @mysql_numrows($tables);
    if ($num_tables > 1) {
        $colspan = ' colspan="2"';
        echo "\n";
        ?>
            <td>
                <select name="table_select[]" size="5" multiple="multiple">
        <?php
        $i = 0;
        echo "\n";
        $is_selected = (!empty($selectall) ? ' selected="selected"' : '');
        while ($i < $num_tables) {
            $table = ((PMA_MYSQL_INT_VERSION >= 32303) ? $tables[$i]['Name'] : $tables[$i]);
            echo '                    <option value="' . $table . '"' . $is_selected . '>' . $table . '</option>' . "\n";
            $i++;
        }
        ?>
                </select>
            </td>
        <?php
    } // end if

    echo "\n";
    ?>
            <td valign="middle">
                <input type="radio" name="what" value="structure" id="radio_dump_structure" checked="checked" />
                <label for="radio_dump_structure"><?php echo $strStrucOnly; ?></label><br />
                <input type="radio" name="what" id="radio_dump_data" value="data" />
                <label for="radio_dump_data"><?php echo $strStrucData; ?></label><br />
                <input type="radio" name="what" id="radio_dump_dataonly" value="dataonly" />
                <label for="radio_dump_dataonly"><?php echo $strDataOnly; ?></label>
    <?php
    if ($num_tables > 1) {
        echo "\n";
    ?>
                <br />
                <a href="<?php echo $checkall_url; ?>&amp;selectall=1#dumpdb" onclick="setSelectOptions('db_dump', 'table_select[]', true); return false;"><?php echo $strSelectAll; ?></a>
                &nbsp;/&nbsp;
                <a href="<?php echo $checkall_url; ?>#dumpdb" onclick="setSelectOptions('db_dump', 'table_select[]', false); return false;"><?php echo $strUnselectAll; ?></a>
    <?php
    }  // end if
    echo "\n";
    ?>
            </td>
        </tr>
        <tr>
            <td<?php echo $colspan; ?>>
                <input type="checkbox" name="drop" value="1" id="checkbox_dump_drop" />
                <label for="checkbox_dump_drop"><?php echo $strStrucDrop; ?></label>
            </td>
        </tr>
        <tr>
            <td<?php echo $colspan; ?>>
                <input type="checkbox" name="showcolumns" value="yes" id="checkbox_dump_showcolumns" />
                <label for="checkbox_dump_showcolumns"><?php echo $strCompleteInserts; ?></label>
            </td>
        </tr>
        <tr>
            <td<?php echo $colspan; ?>>
                <input type="checkbox" name="extended_ins" value="yes" id="checkbox_dump_extended_ins" />
                <label for="checkbox_dump_extended_ins"><?php echo $strExtendedInserts; ?></label>
            </td>
        </tr>
    <?php
    // Add backquotes checkbox
    if (PMA_MYSQL_INT_VERSION >= 32306) {
        ?>
        <tr>
            <td<?php echo $colspan; ?>>
                <input type="checkbox" name="use_backquotes" value="1" id="checkbox_dump_use_backquotes" />
                <label for="checkbox_dump_use_backquotes"><?php echo $strUseBackquotes; ?></label>
            </td>
        </tr>
        <?php
    } // end backquotes feature
    echo "\n";
    ?>
        <tr>
            <td<?php echo $colspan; ?>>
                <input type="checkbox" name="asfile" value="sendit" id="checkbox_dump_asfile" onclick="return checkTransmitDump(this.form, 'transmit')" />
                <label for="checkbox_dump_asfile"><?php echo $strSend; ?></label>
    <?php
    // gzip and bzip2 encode features
    if (PMA_PHP_INT_VERSION >= 40004) {
        $is_zip  = (isset($cfgZipDump) && $cfgZipDump && @function_exists('gzcompress'));
        $is_gzip = (isset($cfgGZipDump) && $cfgGZipDump && @function_exists('gzencode'));
        $is_bzip = (isset($cfgBZipDump) && $cfgBZipDump && @function_exists('bzcompress'));
        if ($is_zip || $is_gzip || $is_bzip) {
            echo "\n" . '                (' . "\n";
            if ($is_zip) {
                ?>
                <input type="checkbox" name="zip" value="zip" id="checkbox_dump_zip" onclick="return checkTransmitDump(this.form, 'zip')" />
                <?php echo '<label for="checkbox_dump_zip">' . $strZip . '</label>' . (($is_gzip || $is_bzip) ? '&nbsp;' : '') . "\n"; ?>
                <?php
            }
            if ($is_gzip) {
                echo "\n"
                ?>
                <input type="checkbox" name="gzip" value="gzip" id="checkbox_dump_gzip" onclick="return checkTransmitDump(this.form, 'gzip')" />
                <?php echo '<label for="checkbox_dump_gzip">' . $strGzip . '</label>' . (($is_bzip) ? '&nbsp;' : '') . "\n"; ?>
                <?php
            }
            if ($is_bzip) {
                echo "\n"
                ?>
                <input type="checkbox" name="bzip" value="bzip" id="checkbox_dump_bzip" onclick="return checkTransmitDump(this.form, 'bzip')" />
                <?php echo '<label for="checkbox_dump_bzip">' . $strBzip . '</label>' . "\n"; ?>
                <?php
            }
            echo "\n" . '                )';
        }
    }
    echo "\n";

    // Encoding setting form appended by Y.Kawada
    if (function_exists('PMA_set_enc_form')) {
        echo '                <br />' . "\n"
             . PMA_set_enc_form('                ');
    }
    ?>
            </td>
        </tr>
        <tr>
            <td<?php echo $colspan; ?>>
                <input type="submit" value="<?php echo $strGo; ?>" />
            </td>
        </tr>
        </table>
        <input type="hidden" name="server" value="<?php echo $server; ?>" />
        <input type="hidden" name="lang" value="<?php echo $lang;?>" />
        <input type="hidden" name="db" value="<?php echo $db;?>" />
        </form>
    </li>
    <?php
} // end of create dump if there is at least one table in the db
?>

    <!-- Create a new table -->
    <li>
        <form method="post" action="tbl_create.php"
            onsubmit="return (emptyFormElements(this, 'table') && checkFormElementInRange(this, 'num_fields', 1))">
        <input type="hidden" name="server" value="<?php echo $server; ?>" />
        <input type="hidden" name="lang" value="<?php echo $lang; ?>" />
        <input type="hidden" name="db" value="<?php echo $db; ?>" />
<?php
echo '        ' . sprintf($strCreateNewTable, htmlspecialchars($db)) . '&nbsp;:<br />' . "\n";
echo '        ' . $strName . '&nbsp;:&nbsp;' . "\n";
echo '        ' . '<input type="text" name="table" maxlength="64" class="textfield" />' . "\n";
echo '        ' . '<br />' . "\n";
echo '        ' . $strFields . '&nbsp;:&nbsp;' . "\n";
echo '        ' . '<input type="text" name="num_fields" size="2" class="textfield" />' . "\n";
echo '        ' . '&nbsp;<input type="submit" value="' . $strGo . '" />' . "\n";
?>
        </form>
    </li>

<?php
// Check if the user is a Superuser
// TODO: set a global variable with this information
// loic1: optimized query
$result       = @mysql_query('USE mysql');
$is_superuser = (!mysql_error());

// Display the DROP DATABASE link only if allowed to do so
if ($cfgAllowUserDropDatabase || $is_superuser) {
    ?>
    <!-- Drop database -->
    <li>
        <a href="sql.php?server=<?php echo $server; ?>&amp;lang=<?php echo $lang; ?>&amp;db=<?php echo urlencode($db); ?>&amp;sql_query=<?php echo urlencode('DROP DATABASE ' . PMA_backquote($db)); ?>&amp;zero_rows=<?php echo urlencode(sprintf($strDatabaseHasBeenDropped, htmlspecialchars(PMA_backquote($db)))); ?>&amp;goto=main.php&amp;back=db_details.php&amp;reload=1"
            onclick="return confirmLink(this, 'DROP DATABASE <?php echo PMA_jsFormat($db); ?>')">
            <?php echo sprintf($strDropDB, htmlspecialchars($db)); ?></a>
        <?php echo PMA_showDocuShort('D/R/DROP_DATABASE.html') . "\n"; ?>
    </li>
    <?php
}
echo "\n";
?>

</ul>


<?php
/**
 * Displays the footer
 */
echo "\n";
require('./footer.inc.php');
?>
