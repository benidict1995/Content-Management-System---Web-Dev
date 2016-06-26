<?php
include 'db/global.php';
session_start();

if (isset($_POST['submit']))
{

$num1 = 1;
$num2 = 2;
$num3 = 3;
$num4 = 4;
$num5 = 5;

$select = $_POST['modeofpayment'];

$result = mysql_query("SELECT * FROM table_padala WHERE padala_name = '$select'");
$numrows = mysql_num_rows($result);

	if ($numrows != 0)
	{


		while ($rows = mysql_fetch_array($result)) 
		{
			$dbid = $rows['padala_id'];
		}
			if ($dbid == $num1 || $dbid == $num2 || $dbid == $num3 || $dbid == $num4 || $dbid == $num5)
			{
				$user = $_SESSION['logged_inuser'];
				$completename = $_POST['completename'];
				$completeaddress = $_POST['completeaddress'];
				$contactnumber = $_POST['contactnumber'];
				$status = "Order";
				$itemsize = $_POST['itemsize'];
				$name =  $_FILES["photo"]["name"];
				$type =  $_FILES["photo"]["type"];
	 			$size =  $_FILES["photo"]["size"];
	 			$temp =  $_FILES["photo"]["tmp_name"];
	 			$error =  $_FILES["photo"]["error"];
	 			$date = date('m/d/Y h:i:s', time());
	 			$date_stamp = date_create();
	 			if ($error > 0)
	 			{
	 				echo '<script>';
 					echo 'alert("Error in uploading Item!");';
 					echo 'location.href="user.php"';
 					echo '</script>';
	 			}
	 			else
	 			{
	 				$file_name = date_format($date_stamp, 'U') . '_' . $name;
	 				if (move_uploaded_file($temp, "shipping_item/" . $file_name))
	 				{
						mysql_query("INSERT INTO table_shipping(buyer_username, padala_name, complete_name, complete_address, contact_number, item_size, date_upload, name_upload, image_upload, Status)
						 VALUES ('$user', '$select', '$completename', '$completeaddress', '$contactnumber', '$itemsize', '$date', '$file_name', '$size', '$status')");
						header('location: user.php');
					}
					else
					{
						echo '<script>';
 						echo 'alert("Error in saving/uploading Item!");';
 						echo 'location.href="user.php"';
 						echo '</script>';
					}
				}

			}
			else
			{
				echo '<script>';
 				echo 'alert("Error 422");';
	 			echo 'location.href="user.php"';
	 			echo '</script>';
			}

	}
}



?>