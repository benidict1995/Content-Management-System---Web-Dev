<?php
include 'db\global.php';

if (isset($_POST['submit']))
{

$num1 = 1;
$num2 = 2;
$num3 = 3;
$num4 = 4;
$num5 = 5;
$num6 = 6;
$num7 = 7;

$select = $_POST['productlist'];
$result = mysql_query("SELECT * FROM table_category WHERE category_name ='$select'");
$numrows = mysql_num_rows($result);
if ($numrows != 0)
{

while ($rows = mysql_fetch_array($result)) 
{
	$dbid = $rows['category_id'];
}
//Accessories
	if ($dbid == $num1)
	{
		$product = $_POST['product'];
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
 			echo 'alert("Error in uploading file!");';
 			echo 'location.href="accessories.php"';
 			echo '</script>';
	 	}

 		else
 		{

 			$file_name = date_format($date_stamp, 'U') . '_' . $name;
 			if(move_uploaded_file($temp, "accessories/" . $file_name))
 			{
 				mysql_query("INSERT INTO table_accessories( id, category_name, product_name, date_upload, name_upload, image_upload) 
 				VALUES ('','$select','$product','$date','$file_name','$size')");
 				header('location: accessories.php');
 			}else
 			{
 					echo '<script>';
 					echo 'alert("Error in saving/uploading files!");';
 					echo 'location.href="accessories.php"';
 					echo '</script>';
 	 		}

		}	

	}
	else
	{
		echo '<script>';
 		echo 'alert("Error in Selecting category!!");';
 		echo 'location.href="accessories.php"';
 		echo '</script>';
	}
	
//Bags
	if ($dbid == $num2)
	{
			$product = $_POST['product'];
			$name = $_FILES["photo"]["name"];
			$type = $_FILES["photo"]["type"];
			$size = $_FILES["photo"]["size"];
			$temp = $_FILES["photo"]["tmp_name"];
			$error =  $_FILES["photo"]["error"];
			$date = date('m/d/Y h:i:s', time());
			$date_stamp = date_create();

			if ($error > 0)
			{
				echo '<script>';
 				echo 'alert("Error in uploading file!");';
 				echo 'location.href="Bags.php"';
 				echo '</script>';
			}
			else
			{
				$file_name = date_format($date_stamp, 'U') . '_' . $name;
				if (move_uploaded_file($temp, "bags/" . $file_name))
				{

					mysql_query("INSERT INTO table_bags( id, category_name, product_name, date_upload, name_upload, image_upload) 
 						VALUES ('','$select','$product','$date','$file_name','$size')");
 					header('location: Bags.php');
 				}
 				else
 				{
 					echo '<script>';
 					echo 'alert("Error in saving/uploading files!");';
 					echo 'location.href="Bags.php"';
 					echo '</script>';
 				}


			}
	}
	else
	{
		echo '<script>';
 		echo 'alert("Error in Selecting category!!");';
 		echo 'location.href="Bags.php"';
 		echo '</script>';

	}

//Jackets
	if ($dbid == $num3)
	{
		$product = $_POST['product'];
		$name = $_FILES["photo"]["name"];
		$type = $_FILES["photo"]["type"];
		$size = $_FILES["photo"]["size"];
		$temp = $_FILES["photo"]["tmp_name"];
		$error =  $_FILES["photo"]["error"];
		$date = date('m/d/Y h:i:s', time());
		$date_stamp = date_create();

		if ($error > 0)
		{
			echo '<script>';
 			echo 'alert("Error in uploading file!");';
 			echo 'location.href="jackets.php"';
 			echo '</script>';
		}
		else
		{
			$file_name = date_format($date_stamp, 'U') . '_' . $name;
			if (move_uploaded_file($temp, "jackets/" . $file_name))
			{

				mysql_query("INSERT INTO table_jackets( id, category_name, product_name, date_upload, name_upload, image_upload) 
 					VALUES ('','$select','$product','$date','$file_name','$size')");
 				header('location: jackets.php');
 			}
 			else
 			{
 				echo '<script>';
 				echo 'alert("Error in saving/uploading files!");';
 				echo 'location.href="jackets.php"';
 				echo '</script>';
 			}


		}
	}
	else
	{
		echo '<script>';
 		echo 'alert("Error in Selecting category!!");';
 		echo 'location.href="jackets.php"';
 		echo '</script>';
	}

//Shirts
	if ($dbid == $num4)
	{
		$product = $_POST['product'];
		$name = $_FILES["photo"]["name"];
		$type = $_FILES["photo"]["type"];
		$size = $_FILES["photo"]["size"];
		$temp = $_FILES["photo"]["tmp_name"];
		$error =  $_FILES["photo"]["error"];
		$date = date('m/d/Y h:i:s', time());
		$date_stamp = date_create();

		if ($error > 0)
		{
			echo '<script>';
 			echo 'alert("Error in uploading file!");';
 			echo 'location.href="shirts.php"';
 			echo '</script>';
		}
		else
		{
			$file_name = date_format($date_stamp, 'U') . '_' . $name;
			if (move_uploaded_file($temp, "shirts/" . $file_name))
			{

				mysql_query("INSERT INTO table_shirts( id, category_name, product_name, date_upload, name_upload, image_upload) 
 					VALUES ('','$select','$product','$date','$file_name','$size')");
 				header('location: shirts.php');
 			}
 			else
 			{
 				echo '<script>';
 				echo 'alert("Error in saving/uploading files!");';
 				echo 'location.href="shirts.php"';
 				echo '</script>';
 			}


		}
	}
	else
	{
		echo '<script>';
 		echo 'alert("Error in Selecting category!!");';
 		echo 'location.href="shirts.php"';
 		echo '</script>';
	}
//Shoes
	if ($dbid == $num5)
	{
		$product = $_POST['product'];
		$name = $_FILES["photo"]["name"];
		$type = $_FILES["photo"]["type"];
		$size = $_FILES["photo"]["size"];
		$temp = $_FILES["photo"]["tmp_name"];
		$error =  $_FILES["photo"]["error"];
		$date = date('m/d/Y h:i:s', time());
		$date_stamp = date_create();

		if ($error > 0)
		{
			echo '<script>';
 			echo 'alert("Error in uploading file!");';
 			echo 'location.href="shoes.php"';
 			echo '</script>';
		}
		else
		{
			$file_name = date_format($date_stamp, 'U') . '_' . $name;
			if (move_uploaded_file($temp, "shoes/" . $file_name))
			{

				mysql_query("INSERT INTO table_shoes( id, category_name, product_name, date_upload, name_upload, image_upload) 
 					VALUES ('','$select','$product','$date','$file_name','$size')");
 				header('location: shoes.php');
 			}
 			else
 			{
 				echo '<script>';
 				echo 'alert("Error in saving/uploading files!");';
 				echo 'location.href="shoes.php"';
 				echo '</script>';
 			}


		}
	}
	else
	{
		echo '<script>';
 		echo 'alert("Error in Selecting category!!");';
 		echo 'location.href="shoes.php"';
 		echo '</script>';
	}
//Shorts
	if ($dbid == $num6)
	{
		$product = $_POST['product'];
		$name = $_FILES["photo"]["name"];
		$type = $_FILES["photo"]["type"];
		$size = $_FILES["photo"]["size"];
		$temp = $_FILES["photo"]["tmp_name"];
		$error =  $_FILES["photo"]["error"];
		$date = date('m/d/Y h:i:s', time());
		$date_stamp = date_create();

		if ($error > 0)
		{
			echo '<script>';
 			echo 'alert("Error in uploading file!");';
 			echo 'location.href="shorts.php"';
 			echo '</script>';
		}
		else
		{
			$file_name = date_format($date_stamp, 'U') . '_' . $name;
			if (move_uploaded_file($temp, "shorts/" . $file_name))
			{

				mysql_query("INSERT INTO table_shorts( id, category_name, product_name, date_upload, name_upload, image_upload) 
 					VALUES ('','$select','$product','$date','$file_name','$size')");
 				header('location: shorts.php');
 			}
 			else
 			{
 				echo '<script>';
 				echo 'alert("Error in saving/uploading files!");';
 				echo 'location.href="shorts.php"';
 				echo '</script>';
 			}


		}
	}
	else
	{
		echo '<script>';
 		echo 'alert("Error in Selecting category!!");';
 		echo 'location.href="shorts.php"';
 		echo '</script>';
	}

//Slippers
if ($dbid == $num7)
	{
		$product = $_POST['product'];
		$name = $_FILES["photo"]["name"];
		$type = $_FILES["photo"]["type"];
		$size = $_FILES["photo"]["size"];
		$temp = $_FILES["photo"]["tmp_name"];
		$error =  $_FILES["photo"]["error"];
		$date = date('m/d/Y h:i:s', time());
		$date_stamp = date_create();

		if ($error > 0)
		{
			echo '<script>';
 			echo 'alert("Error in uploading file!");';
 			echo 'location.href="slippers.php"';
 			echo '</script>';
		}
		else
		{
			$file_name = date_format($date_stamp, 'U') . '_' . $name;
			if (move_uploaded_file($temp, "slippers/" . $file_name))
			{

				mysql_query("INSERT INTO table_slippers( id, category_name, product_name, date_upload, name_upload, image_upload) 
 					VALUES ('','$select','$product','$date','$file_name','$size')");
 				header('location: slippers.php');
 			}
 			else
 			{
 				echo '<script>';
 				echo 'alert("Error in saving/uploading files!");';
 				echo 'location.href="slippers.php"';
 				echo '</script>';
 			}


		}
	}
	else
	{
		echo '<script>';
 		echo 'alert("Error in Selecting category!!");';
 		echo 'location.href="slippers.php"';
 		echo '</script>';
	}
}
}

else
{
	echo '<script>';
 	echo 'alert("Error in Selecting category!!");';
 	echo 'location.href="admin.php"';
 	echo '</script>';
}
?>