<?php
include 'db/global.php';

if (isset($_POST['submit']))
{

$num1 = 1;
$num2 = 2;
$num3 = 3;
$num4 = 4;
$num5 = 5;
$num6 = 6;
$num7 = 7;

$select = $_POST['productlistremove'];
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
			$id = $_POST['ProductId'];
			$sql = mysql_query("SELECT * FROM table_accessories WHERE id = '".$id."'");
			$numrows = mysql_num_rows($sql);
			while ($rows = mysql_fetch_assoc($sql)) 
			{
				$dbid = $rows['id'];
			}
			if ( $id == $dbid)
			{
				mysql_query("DELETE FROM table_accessories WHERE id = '".$id."'");
				header('location: accessories.php');
			}
			else
			{
				header('location: accessories.php');
			}
		}
		else
		{
			echo '<script>';
 			echo 'alert("Error WRONG Category!!");';
 			echo 'location.href="accessories.php"';
 			echo '</script>';
		}
//Bags
		if ($dbid == $num2)
		{
			$id = $_POST['ProductId'];
			$sql = mysql_query("SELECT * FROM table_bags WHERE id = '".$id."'");
			$numrows = mysql_num_rows($sql);
			while ($rows = mysql_fetch_assoc($sql)) 
			{
				$dbid = $rows['id'];
			}
			if ( $id == $dbid)
			{
				mysql_query("DELETE FROM table_bags WHERE id = '".$id."'");
				header('location: Bags.php');
			}
			else
			{
				header('location: Bags.php');	
			}
		}
		else
		{
			echo '<script>';
 			echo 'alert("Error WRONG Information!!");';
 			echo 'location.href="Bags.php"';
 			echo '</script>';
		}

//Jackets
		if ($dbid == $num3)
		{
			$id = $_POST['ProductId'];
			$sql = mysql_query("SELECT * FROM table_jackets WHERE id = '".$id."'");
			$numrows = mysql_num_rows($sql);
			while ($rows = mysql_fetch_assoc($sql)) 
			{
				$dbid = $rows['id'];
			}
			if ( $id = $dbid)
			{
				mysql_query("DELETE FROM table_jackets WHERE id = '".$id."'");
				header('location: jackets.php');
			}
			else
			{
				header('location: jackets.php');
			}
		}
		else
		{
			echo '<script>';
 			echo 'alert("Error WRONG Information!!");';
 			echo 'location.href="jackets.php"';
 			echo '</script>';
		}
//Shirts

		if ($dbid == $num4)
		{
			$id = $_POST['ProductId'];
			$sql = mysql_query("SELECT * FROM table_shirts WHERE id = '".$id."'");
			$numrows = mysql_num_rows($sql);
			while ($rows = mysql_fetch_assoc($sql)) 
			{
				$dbid = $rows['id'];
			}
			if ( $id = $dbid)
			{
				mysql_query("DELETE FROM table_shirts WHERE id = '".$id."'");
				header('location: shirts.php');
			}
			else
			{
				header('location: shirts.php');
			}
		}
		else
		{
			echo '<script>';
 			echo 'alert("Error WRONG Information!!");';
 			echo 'location.href="shirts.php"';
 			echo '</script>';
		}
//Shoes

		if ($dbid == $num5)
		{
			$id = $_POST['ProductId'];
			$sql = mysql_query("SELECT * FROM table_shoes WHERE id = '".$id."'");
			$numrows = mysql_num_rows($sql);
			while ($rows = mysql_fetch_assoc($sql)) 
			{
				$dbid = $rows['id'];
			}
			if ( $id = $dbid)
			{
				mysql_query("DELETE FROM table_shoes WHERE id = '".$id."'");
				header('location: shoes.php');
			}
			else
			{
				header('location: shoes.php');
			}
		}
		else
		{
			echo '<script>';
 			echo 'alert("Error WRONG Information!!");';
 			echo 'location.href="shirts.php"';
 			echo '</script>';
		}

//Shorts
		if ($dbid == $num6)
		{
			$id = $_POST['ProductId'];
			$sql = mysql_query("SELECT * FROM table_shorts WHERE id = '".$id."'");
			$numrows = mysql_num_rows($sql);
			while ($rows = mysql_fetch_assoc($sql)) 
			{
				$dbid = $rows['id'];
			}
			if ( $id = $dbid)
			{
				mysql_query("DELETE FROM table_shorts WHERE id = '".$id."'");
				header('location: shorts.php');
			}
			else
			{
				header('location: shorts.php');
			}
		}
		else
		{
			echo '<script>';
 			echo 'alert("Error WRONG Information!!");';
 			echo 'location.href="shorts.php"';
 			echo '</script>';
		}
//Slippers

		if ($dbid == $num7)
		{
			$id = $_POST['ProductId'];
			$sql = mysql_query("SELECT * FROM table_slippers WHERE id = '".$id."'");
			$numrows = mysql_num_rows($sql);
			while ($rows = mysql_fetch_assoc($sql)) 
			{
				$dbid = $rows['id'];
			}
			if ( $id = $dbid)
			{
				mysql_query("DELETE FROM table_slippers WHERE id = '".$id."'");
				header('location: slippers.php');
			}
			else
			{
				header('location: slippers.php');
			}
		}
		else
		{
			echo '<script>';
 			echo 'alert("Error WRONG Information!!");';
 			echo 'location.href="slippers.php"';
 			echo '</script>';
		}


	}
	else
	{
		echo '<script>';
 		echo 'alert("Error in Selecting category!!");';
 		echo 'location.href="admin.php"';
 		echo '</script>';
	}

}


?>