<?php

include 'db/global.php';

$verify = 0;
$user = $_POST['Username'];
$pass = $_POST['Password'];
$cpass = $_POST['CPassword'];
$dbuser = null;
if (!empty($_POST['Firstname']) && !empty($_POST['Lastname']) && !empty($_POST['Username']) && !empty($_POST['Password']))
{
	$result = mysql_query("SELECT * FROM table_user WHERE user_username = '$user'");
	$numrows = mysql_num_rows($result);
	while ($rows = mysql_fetch_assoc($result)) {
		$dbuser = $rows['user_username'];
	}
	if ($user == $dbuser)
	{
		echo '<script>';
 		echo 'alert("Invalid Username Try Another!");';
 		echo 'location.href="index.php"';
 		echo '</script>';
	}
	else
	{
		if ($pass != $cpass)
		{
			echo '<script>';
 			echo 'alert("Password and Confirm password Not Match !");';
 			echo 'location.href="index.php"';
 			echo '</script>';	
		}
		else
		{

		mysql_query("INSERT INTO table_user(verify ,user_firstname, user_lastname, user_username, user_password)
			VALUES ('$verify','$_POST[Firstname]','$_POST[Lastname]','$_POST[Username]',md5('$_POST[Password]'))");

			mysql_close($db_conn);
			header('location:index.php');
		}
	}
}
else
{
	header('Refresh: 1; index.php');
}
?>