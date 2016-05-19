<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
header('Content-Type: text/html; charset=utf-8');
$hostname_bdSgi = "192.168.0.2";
$database_bdSgi = "bdsgi";
$username_bdSgi = "root";
$password_bdSgi = "83805548";
$bdSgi = mysql_pconnect($hostname_bdSgi, $username_bdSgi, $password_bdSgi) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
?>