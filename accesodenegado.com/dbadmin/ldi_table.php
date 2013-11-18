<?php
/* $Id: ldi_table.php,v 1.13 2002/02/24 19:44:37 loic1 Exp $ */


/**
 * This file defines the forms used to insert a textfile into a table
 */


/**
 * Gets some core libraries
 */
require('./libraries/grab_globals.lib.php');
require('./header.inc.php');


/**
 * Displays the form
 */
?>
<form action="ldi_check.php" method="post" enctype="multipart/form-data">
    <table cellpadding="5" border="2">
    <tr>
        <td><?php echo $strLocationTextfile; ?></td>
        <td colspan="2"><input type="file" name="textfile" /></td>
    </tr>
    <tr>
        <td><?php echo $strReplaceTable; ?></td>
        <td><input type="checkbox" name="replace" value="REPLACE" /><?php echo $strReplace; ?></td>
        <td><?php echo $strTheContents; ?></td>
    </tr>
    <tr>
        <td><?php echo $strFieldsTerminatedBy; ?></td>
        <td><input type="text" name="field_terminater" size="2" maxlength="2" value=";" /></td>
        <td><?php echo $strTheTerminator; ?></td>
    </tr>
    <tr>
        <td><?php echo $strFieldsEnclosedBy; ?></td>
        <td>
            <input type="text" name="enclosed" size="1" maxlength="1" value="&quot;" />
            <input type="checkbox" name="enclose_option" value="OPTIONALLY" /><?php echo $strOptionally . "\n"; ?>
        </td>
        <td><?php echo $strOftenQuotation; ?></td>
    </tr>
    <tr>
        <td><?php echo $strFieldsEscapedBy; ?></td>
        <td><input type="text" name="escaped" size="2" maxlength="2" value="\" /></td>
        <td><?php echo $strOptionalControls; ?></td>
    </tr>
    <tr>
        <td><?php echo $strLinesTerminatedBy; ?></td>
        <td><input type="text" name="line_terminator" size="8" maxlength="8" value="<?php echo ((PMA_whichCrlf() == "\n") ? '\n' : '\r\n'); ?>" /></td>
        <td><?php echo $strCarriage; ?><br /><?php echo $strLineFeed; ?></td>
    </tr>
    <tr>
        <td><?php echo $strColumnNames; ?></td>
        <td><input type="text" name="column_name" /></td>
        <td><?php echo $strIfYouWish; ?></td>
    </tr>
<?php
// 2002/2/22 appended by Y.Kawada: Kanji encoding convert controls
if (function_exists('PMA_set_enc_form')) {
    echo '    <tr>' . "\n"
         . '        <td>' . $strKanjiEncodConvert . '</td>' . "\n"
         . '        <td colspan=2>' . "\n"
         . PMA_set_enc_form('            ')
         . '        </td>' . "\n"
         . '    </tr>' . "\n";
} // end if
?>
    <tr>
        <td colspan="3" align="center"><?php print PMA_showDocuShort('L/O/LOAD_DATA.html'); ?></td>
    </tr>
    <tr>
        <td colspan="3" align="center">
            <input type="hidden" name="lang" value="<?php echo $lang; ?>" />
            <input type="hidden" name="server" value="<?php echo $server; ?>" />
            <input type="hidden" name="db" value="<?php echo $db; ?>" />
            <input type="hidden" name="table" value="<?php echo $table; ?>" />
            <input type="hidden" name="zero_rows" value="<?php echo $strTheContent; ?>" />
            <input type="hidden" name="goto" value="tbl_properties.php" />
            <input type="hidden" name="into_table" value="<?php echo $table; ?>" />
            <input type="submit" name="btnLDI" value="<?php echo $strSubmit; ?>" />&nbsp;&nbsp;
            <input type="reset" value="<?php echo $strReset; ?>" />
        </td>
    </tr>
</table>
</form>


<?php
/**
 * Displays the footer
 */
require('./footer.inc.php');
?>
