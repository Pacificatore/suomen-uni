<?php


$link=Mysql_connect('localhost', 'root', '');

if(!$link) {
	die('not connected: ' .Mysql_error());
	
	
}

$db_selected=mysql_select_db('finnois', $link);

if(!$db_selected) {
	
die('base innaccessible: ' .Mysql_error());
	
	
}





?>