<?php
include 'db\global.php';
session_start();
if (isset($_POST['submit']))
{
	$uname = $_POST['Username'];
	$paswd = $_POST['Password'];
	if (empty($uname) && empty($paswd))
	{
		echo '<script>';
 		echo 'alert("Invalid Information!");';
 		echo 'location.href="index.php"';
 		echo '</script>';
	}
		$result = mysql_query("SELECT * FROM table_user WHERE user_username = '".$uname."' AND user_password = '".md5($paswd)."' ");
		$numrows = mysql_num_rows($result);
			while ($rows = mysql_fetch_assoc($result)) 
			{
				$dbfirstname = $rows['user_firstname'];
				$dbusername = $rows['user_username'];
				$dbpassword = $rows['user_password'];
				$dbverify = $rows['verify'];
			}
		if ($numrows != 0)
		{

			if ($dbverify == 0)
			{
				if ($uname == $dbusername && md5($paswd) == $dbpassword)
				{
					$_SESSION['firstnameuser'] = $dbfirstname;
					$_SESSION['logged_inuser'] = $dbusername;
					$_SESSION['user_type'] = $dbverify;
					header('Refresh: 1; user.php');
				}
				else
				{
					echo '<script>';
 					echo 'alert("Invalid Information!");';
 					echo 'location.href="index.php"';
 					echo '</script>';
				}
			}
			else
			{
				if ($uname == $dbusername && md5($paswd) == $dbpassword)
				{
					$_SESSION['firstname'] = $dbfirstname;
					$_SESSION['logged_in'] = $dbusername;
					$_SESSION['user_type'] = $dbverify;
					header('location: admin.php');
				}
				else
				{
					echo '<script>';
 					echo 'alert("Invalid Information!");';
 					echo 'location.href="index.php"';
 					echo '</script>';
				}
			}
		}

		else
		{
				echo '<script>';
 				echo 'alert("Invalid Information!");';
 				echo 'location.href="index.php"';
 				echo '</script>';
		}
}
else
{
	echo '<script>';
 	echo 'alert("Invalid Information!");';
 	echo 'location.href="index.php"';
 	echo '</script>';
}
?>