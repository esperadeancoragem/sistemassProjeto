<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
define ('hostname_bdSgi', '192.168.0.2');
define('database_bdSgi', 'bdsgi');
define('username_bdSgi', 'root');
define('password_bdSgi', 83805548);

function DBClose($link){
	mysqli_close($link) or die(mysqli_error()); 
}

function DBConnect(){
$link = mysqli_connect(hostname_bdSgi, username_bdSgi, password_bdSgi, database_bdSgi) or die(mysqli_error()); 
mysqli_set_charset($link,"utf8");
return $link;
}
?>