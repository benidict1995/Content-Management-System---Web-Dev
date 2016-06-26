<?php
	
	$db_conn = mysql_connect("localhost","root","");
	if (!$db_conn)
	{
		die('Not Connected to the Server: ' . mysql_error());
	}
	mysql_select_db("twenty8_db",$db_conn);
?>