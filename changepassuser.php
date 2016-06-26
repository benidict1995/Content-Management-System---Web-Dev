<?php
include 'db\global.php';

session_start();


if (isset($_POST['submit']))
{
	$user = $_SESSION['logged_inuser'];
	$newpass = $_POST['newpassword'];
	$cnewpass = $_POST['cnewpassword'];
	$currentpass = $_POST['currentpassword'];
	$result  = mysql_query("SELECT * FROM table_user WHERE user_username = '".$user."'");
	$numrows = mysql_num_rows($result);	
	while ($rows = mysql_fetch_assoc($result)) 
	{
		$dbpassword = $rows['user_password'];
		$dbverify = $rows['verify'];
	}
	if ($numrows != 0)
	{
		if ($dbverify == 1)
		{
			if (!empty($_SESSION['logged_in']))
			{
				if (md5($currentpass) == $dbpassword)
				{
					if ($newpass == $cnewpass)
					{
						mysql_query("UPDATE table_user SET user_password= md5('$newpass') WHERE user_username = '".$user."' ");
						echo '<script>';
 						echo 'alert("Change Password Successful!");';
 						echo 'location.href="admin.php"';
 						echo '</script>';
					}
					else
					{
						echo '<script>';
 						echo 'alert("Confirm Password Did Not Match!");';
 						echo 'location.href="admin.php"';
 						echo '</script>';		
					}
				}
				else
				{
					echo '<script>';
 					echo 'alert("Your Current Password Did Not Match!");';
 					echo 'location.href="admin.php"';
 					echo '</script>';
				}
			}
			else
			{
				echo '<script>';
 				echo 'alert("You Are Not Logged In!");';
 				echo 'location.href="admin.php"';
 				echo '</script>';
			}
		}
		else
		{

			if (!empty($_SESSION['logged_inuser']))
			{
				if (md5($currentpass) == $dbpassword)
				{
					if ($newpass == $cnewpass)
					{
						mysql_query("UPDATE table_user SET user_password= md5('$newpass') WHERE user_username = '".$user."' ");
						echo '<script>';
 						echo 'alert("Change Password Successful!");';
 						echo 'location.href="user.php"';
 						echo '</script>';
					}
					else
					{
						echo '<script>';
 						echo 'alert("Confirm Password Did Not Match!");';
 						echo 'location.href="user.php"';
 						echo '</script>';		
					}
				}
				else
				{
					echo '<script>';
 					echo 'alert("Your Current Password Did Not Match!");';
 					echo 'location.href="user.php"';
 					echo '</script>';
				}
			}
			else
			{
				echo '<script>';
 				echo 'alert("You Are Not Logged In!");';
 				echo 'location.href="user.php"';
 				echo '</script>';
			}
		}
	}
	else
	{
			echo '<script>';
 			echo 'alert("No Account !");';
 			echo 'location.href="admin.php"';
 			echo '</script>';
	}
}
?>