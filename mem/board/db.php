<?php
	header('Content-Type: text/html; charset=UTF-8');
    
    $db = new mysqli("localhost", "root", "hackers1234!", "mysql");
    $db -> set_charset('utf8');

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>