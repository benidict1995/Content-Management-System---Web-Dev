<?php
include 'db/global.php';

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	mysql_query("DELETE FROM table_message WHERE id ='".$id."'");
		header('location: user_mail.php');
}
?>