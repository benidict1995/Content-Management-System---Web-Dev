<?php

	include 'db\global.php';

	$name =  $_FILES["photo"]["name"];
	$type =  $_FILES["photo"]["type"];
 	$size =  $_FILES["photo"]["size"];
 	$temp =  $_FILES["photo"]["tmp_name"];
 	$error =  $_FILES["photo"]["error"];
 	$date = date('m/d/Y h:i:s', time());

 	$date_stamp = date_create(); //used for unique file name

 	if ($error > 0)
 	{
 		die("Error uploading file! Code $error.");
 	}
 	else
 	{
 		
 		if ($name != "" && ($type = "image/jpeg" || $type = "image/png" || $type = "image/gif" ) && $type <= 4294967295)
 		{
 			$file_name = date_format($date_stamp, 'U') . '_' . $name;
 			if(move_uploaded_file($temp, "uploaded/" . $file_name))
 			{
 				mysql_query("INSERT INTO cover_upload(date_upload, name, image) VALUES ('$date','$file_name','$size')");
 				mysql_close($db_conn);
 				header('location:admin.php');
 			}else
 			{
 				header('location:admin.php');
 			}
 		}
 		else
 		{
 			die("Format not Allowed!");
 			header('location:admin.php');
 		}
 	}
?>