<?php
include 'db/global.php';

if (isset($_GET['shipping_id']))
{
	$id = $_GET['shipping_id'];
		mysql_query("DELETE FROM table_shipping WHERE shipping_id = '".$id."'");
				header('location: admin_mail.php');
}
if (isset($_GET['id']))
{
	$id = $_GET['id'];
	mysql_query("DELETE FROM table_message WHERE id ='".$id."'");
		header('location: admin_chat.php');
}
?>