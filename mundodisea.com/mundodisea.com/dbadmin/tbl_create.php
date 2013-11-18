<?php
/* $Id: tbl_create.php,v 1.10 2000/07/31 13:17:28 tobias Exp $ */

require("header.inc.php");

if(isset($submit))
{
    if(!isset($query))
        $query = "";
    for($i=0; $i<count($field_name); $i++)
    {
        $query .= "$field_name[$i] $field_type[$i] ";
        if($field_length[$i] != "")
            $query .= "(".stripslashes($field_length[$i]).") ";
        if($field_attribute[$i] != "")
            $query .= "$field_attribute[$i] ";
        if($field_default[$i] != "")
            $query .= "DEFAULT '".stripslashes($field_default[$i])."' ";
        $query .= "$field_null[$i] $field_extra[$i], ";
    }
    $query = ereg_replace(", $", "", $query);

    if(!isset($primary))
        $primary = "";

    if(!isset($field_primary))
        $field_primary = array();

    for($i=0;$i<count($field_primary);$i++)
    {
        $j = $field_primary[$i];
        $primary .= "$field_name[$j], ";
    }
    $primary = ereg_replace(", $", "", $primary);
    if(count($field_primary) > 0)
        $primary = ", PRIMARY KEY ($primary)";

    if(!isset($index))
        $index = "";

    if(!isset($field_index))
        $field_index = array();

    for($i=0;$i<count($field_index);$i++)
    {
        $j = $field_index[$i];
        $index .= "$field_name[$j], ";
    }
    $index = ereg_replace(", $", "", $index);
    if(count($field_index) > 0)
        $index = ", INDEX ($index)";
    if(!isset($unique))
        $unique = "";

    if(!isset($field_unique))
        $field_unique = array();

    for($i=0;$i<count($field_unique);$i++)
    {
        $j = $field_unique[$i];
        $unique .= "$field_name[$j], ";
    }
    $unique = ereg_replace(", $", "", $unique);
    if(count($field_unique) > 0)
        $unique = ", UNIQUE ($unique)";
    $query_keys = $primary.$index.$unique;
    $query_keys = ereg_replace(", $", "", $query_keys);

    // echo "$query $query_keys";
    $sql_query = "CREATE TABLE ".$table." (".$query." ".$query_keys.")";
    if(MYSQL_MAJOR_VERSION == "3.23" && !empty($comment))
        $sql_query .= " comment = '$comment'";
    $result = mysql_db_query($db, $sql_query) or mysql_die();
    $message = "$strTable $table $strHasBeenCreated";
    include("tbl_properties.php");
    exit;
}
else
{
    $action = "tbl_create.php";
    include("tbl_properties.inc.php");
}

require ("footer.inc.php");
?>