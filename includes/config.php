<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
// login to phpMyAdmin https://p3nlmysqladm002.secureserver.net/grid50/6169/index.php
$hostname_main = "maintiles.db.10930988.hostedresource.com";
$database_main = "maintiles";
$username_main = "maintiles";
$password_main = "Miami432!";
$main = mysql_pconnect($hostname_main, $username_main, $password_main) or trigger_error(mysql_error(),E_USER_ERROR); 

?>