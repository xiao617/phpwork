<?php
$user = 'root';
$pass = 'root';
$host = 'localhost';

$link = mysql_connect($host, $user, $pass);

if(!$link)
{
	die('can not connect to MySQL' . mysql_errno());	
}

$database = "contact";
$db_select = mysql_select_db($database);

if(!$db_select)
{
	die('can not connect to ' . $database . ' ' . mysql_errno());	
}


?>