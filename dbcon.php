<?php
$hostname_dbcon = "localhost";
$database_dbcon = "candystore";
$username_dbcon = "root";
$password_dbcon = "";
$conn = mysql_pconnect($hostname_dbcon, $username_dbcon, $password_dbcon) or trigger_error(mysql_error(),E_USER_ERROR); 
$select_db = mysql_select_db($database_dbcon, $conn);
if (!$select_db) {
    die ('Query is not found: ' . mysql_error());
}
?>