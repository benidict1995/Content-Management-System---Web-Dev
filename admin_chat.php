<?php session_start();
	
	if(isset($_SESSION['user_type']))
	{
		if($_SESSION['user_type'] === 0)
		{
			header('Location: user.php');
		}
	}
	
	include 'db/global.php';
	?>

<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/png" href="img/benjie.png">
		<link rel="stylesheet" type="text/css" href="css/twenty8.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery.slides.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<a href="admin.php" class="navbar-brand" id="titlehead">ADMIN</a>
		<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>	
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="admin.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-envelope"></span> Inbox</a>
						<ul class="dropdown-menu">
							<li><a href="admin_mail.php">Order Message</a></li>
							<li><a href="admin_chat.php">Costumer Message</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> Settings<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Help</a></li>
							<li><a href="#changepass" data-toggle="modal">Change Password</a></li>
						</ul>
					</li>
					<li>
					<?php
					
					if (!empty($_SESSION['logged_in']))
						{
					?>
							<a href="logout.php"><span class="glyphicon glyphicon-off"></span></a>
					<?php
						}
					else
						{
							header('location: index.php');
						}
					?>					
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-left">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> Add</a>
						<ul class="dropdown-menu">
							<li><a href="#addproduct" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Add Products</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> Remove</a>
						<ul class="dropdown-menu">
							<li><a href="#removeproduct" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Remove Products</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>	


<div class="modal fade" id="addproduct" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<a data-dismiss="modal" class="nav navbar-nav navbar-right"><span class="glyphicon glyphicon-remove"></span></a>
				<h4>Add Product:</h4>
			</div>
			<div class="modal-body">
				<form action="product_add.php" method="post" enctype="multipart/form-data">
					Choose Category:
					<select name="productlist" class="form-control">
					<?php
						$resulta = mysql_query("SELECT * FROM table_category");
						while ($row = mysql_fetch_array($resulta)) 
						{
							echo "<option>".$row['category_name']."</option>";	
						}
					?>
					</select><br>
					<input type="text" class="form-control" placeholder="Product" name="product"/required = "required"><br>
					<input type="file" name="photo"/required = "required"><br>
					<input type="submit" name="submit" value="Add" />
				</form>			
			</div>
		</div>	
	</div>
</div>

<div class="modal fade" id="removeproduct" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<a data-dismiss="modal" class="nav navbar-nav navbar-right"><span class="glyphicon glyphicon-remove"></span></a>
				<h4>Remove Product:</h4>
			</div>
			<div class="modal-body">
				<form action="product_remove.php" method="post">
					Choose Category:
					<select name="productlistremove" class="form-control">
					<?php
						$resulta = mysql_query("SELECT * FROM table_category");
						while ($row = mysql_fetch_array($resulta)) 
						{
							echo "<option>".$row['category_name']."</option>";	
						}
					?>
					</select><br>
					<input type="text" class="form-control" placeholder="Product ID" name="ProductId"/required = "required"><br>
					<input type="submit" name="submit" value="Add" />
				</form>			
			</div>
		</div>	
	</div>
</div>

<div class="modal fade" id="changepass" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<a data-dismiss="modal" class="nav navbar-nav navbar-right"><span class="glyphicon glyphicon-remove"></span></a>
				<h4>Change Password:</h4>
			</div>
			<div class="modal-body">
				<form action="changepass.php" method="post" >
					<input type="password" class="form-control" placeholder="Current Password" name="currentpassword"/required="required"><br>
					<input type="password" class="form-control" placeholder="New Password" name="newpassword"/required="required"><br>
					<input type="password" class="form-control" placeholder="Re-type New Password" name="cnewpassword"/required="required"><br>
					<input type="submit" name="submit" value="Save Changes">
				</form>
			</div>
		</div>
	</div>
</div>

<div id="category_list">
		<table class='table table-bordered table-hover' style='width:100%;'>
		<tr>
			<th>Category</th>
		</tr>
		<tr>
			<td><a href="accessories.php">Accesories</a></td>
		</tr>
		<tr>
			<td><a href="Bags.php">Bags</a></td>
		</tr>
		<tr>
			<td><a href="jackets.php">Jackets</a></td>
		</tr>
		<tr>
			<td><a href="shirts.php">Shirts</a></td>
		</tr>
		<tr>
			<td><a href="shoes.php">Shoes</a></td>
		</tr>
		<tr>
			<td><a href="shorts.php">Shorts</a></td>
		</tr>
		<tr>
			<td><a href="slippers.php">Slippers</a></td>
		</tr>
		</table>
</div>


<!-- Display Image Under Construction -->
<div id="coverphotoadmin">
 <?php
	$sql = 'SELECT * FROM cover_upload ORDER BY id DESC LIMIT 1';
	$result = mysql_query($sql);

	while ($row = mysql_fetch_assoc($result)) {
		echo "<img src='uploaded/{$row['name']}' style='width:800px; height:250px;'>";
	}
?>

</div>


<div id="uploadboxadmin">
		<form action="coverphoto_upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="photo"/required><br>
			<input type="submit" name="submit" value="Upload" />
		</form>
</div>


<div id="filteruser">
	<form action="admin_chat.php" method="post" enctype="multipart/form-data">
			 <input type="submit" name="filter" value="Search">		<input type="text" placeholder="Costumer Username" name="costumerusername" required/>
	</form>
</div>

<div id="orderlist">
<?php

	if (isset($_POST['filter']))
	{
		$username = $_POST['costumerusername'];
		$result = mysql_query("SELECT * FROM table_message WHERE username LIKE '%" .$username. "%'");
		echo "<table class='table table-bordered table-hover' style='width:100%; text-align:center;'>

		<tr>
		<td id='menutitle'>Sender</td>
		<td id='menutitle'>Message</td>
		<td id='menutitle'>Date</td>
		<td id='menutitle'>Action</td>
		</tr>";

		while ($row = mysql_fetch_array($result)) 
		{
			echo "<tr>";
			echo "<td>".$row['username']."</td>";
			echo "<td>".$row['message']."</td>";
			echo "<td>".$row['date']."</td>";
			echo "<td>".'<a href="msgdelete.php?id='.$row['id'].'">Delete</a>'. "/" .'<a href="reply_chat.php?customer='.$row['username'].'"  >Reply</a>'."</td>";
		//	echo "<td>".'<a href="msgdelete.php?shipping_id='.$row['shipping_id'].'">Delete</a>";
	//		echo "<td>"."<a href=#productedit>"."Edit"."</a>"."</td>";
			echo "</tr>";
		}
		echo "</table>";



	}
	else
	{
		$result = mysql_query("SELECT * FROM table_message WHERE sendto = '".'admin'."'");
		echo "<table class='table table-bordered table-hover' style='width:100%; text-align:center;'>

		<tr>
		<td id='menutitle'>Sender</td>
		<td id='menutitle'>Message</td>
		<td id='menutitle'>Date</td>
		<td id='menutitle'>Action</td>
		</tr>";

		while ($row = mysql_fetch_array($result)) 
		{
			echo "<tr>";
			echo "<td>".$row['username']."</td>";
			echo "<td>".$row['message']."</td>";
			echo "<td>".$row['date']."</td>";
			echo "<td>".'<a href="msgdelete.php?id='.$row['id'].'">Delete</a>'. "/" .'<a href="reply_chat.php?customer='.$row['username'].'"  >Reply</a>'."</td>";
		//	echo "<td>".'<a href="msgdelete.php?shipping_id='.$row['shipping_id'].'">Delete</a>";
	//		echo "<td>"."<a href=#productedit>"."Edit"."</a>"."</td>";
			echo "</tr>";
		}
		echo "</table>";

	}
?>	
</div>


</body>
</html>