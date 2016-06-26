<?php 
	session_start();
	
	if(isset($_SESSION['user_type']))
	{
		if($_SESSION['user_type'] === 1)
		{
			header('Location: admin.php');
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
				<a href="user.php" class="navbar-brand" id="titlehead">Twenty Eight</a>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>	
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
					<li><a href="user.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
						<li><a href="user_mail.php"><span class="glyphicon glyphicon-envelope"></span>  Inbox</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> ORDER</a>
							<ul class="dropdown-menu">
								<li><a href="#orderform" data-toggle="modal">Shipping Form</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['firstnameuser']; ?></a>
							<ul class="dropdown-menu">
								<li><a href="#changepass" data-toggle="modal"> Change Password</a></li>
								<li>
									<?php	
									if (!empty($_SESSION['logged_inuser']))
										{
									?>
										<a href="logoutuser.php"> Log Out</a>
									<?php
										}
									else
									{
										header('location: index.php');
									}
									?>					
								</li>
							</ul>
						</li>
					</ul>
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
				<form action="changepassuser.php" method="post" >
					<input type="password" class="form-control" placeholder="Current Password" name="currentpassword"/required="required"><br>
					<input type="password" class="form-control" placeholder="New Password" name="newpassword"/required="required"><br>
					<input type="password" class="form-control" placeholder="Re-type New Password" name="cnewpassword"/required="required"><br>
					<input type="submit" name="submit" value="Save Changes">
				</form>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="orderform" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<a data-dismiss="modal" class="nav navbar-nav navbar-right"><span class="glyphicon glyphicon-remove"></span></a>
				<h4>Order Form:</h4>
			</div>
			<div class="modal-body">
				<form action="shipping.php" method="post" enctype="multipart/form-data">
					<select name="modeofpayment" class="form-control">
						<?php
								$resulta = mysql_query("SELECT * FROM table_padala");
								while ($row = mysql_fetch_array($resulta)) 
								{
									echo "<option>".$row['padala_name']."</option>";	
								}
						?>
					</select><br>
					<input type="text" class="form-control" placeholder="Complete Name" name="completename"/required="required"><br>
					<input type="text" class="form-control" placeholder="Complete Address" name="completeaddress"/required="required"><br>
					<input type="text" class="form-control" placeholder="Contact Number" name="contactnumber"/required="required"><br>
					<input type="text" class="form-control" placeholder="Item Size" name="itemsize"/required = "required"><br>
					<input type="file" name="photo"/required = "required"><br>
					<input type="submit" name="submit" value="Submit Order">
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
			<td><a href="accessories_user.php">Accesories</a></td>
		</tr>
		<tr>
			<td><a href="Bags_user.php">Bags</a></td>
		</tr>
		<tr>
			<td><a href="jackets_user.php">Jackets</a></td>
		</tr>
		<tr>
			<td><a href="shirts_user.php">Shirts</a></td>
		</tr>
		<tr>
			<td><a href="shoes_user.php">Shoes</a></td>
		</tr>
		<tr>
			<td><a href="shorts_user.php">Shorts</a></td>
		</tr>
		<tr>
			<td><a href="slippers_user.php">Slippers</a></td>
		</tr>
		</table>
</div>

<div id="coverphotoadmin">
 <?php
	$sql = 'SELECT * FROM cover_upload ORDER BY id DESC LIMIT 1';
	$result = mysql_query($sql);

	while ($row = mysql_fetch_assoc($result)) {
		echo "<img src='uploaded/{$row['name']}' style='width:800px; height:250px;'>";
	}
?>
</div>

<div id="userfilterproduct">
	<form action="shoes_user.php" method="post" enctype="multipart/form-data">
			 <input type="submit" name="filter" value="Search">		<input type="text" placeholder="Product Name" name="productname" required/>
	</form>
</div>

<div id="userproductlist">
<?php
	if (isset($_POST['filter']))
	{
		$productname = $_POST['productname'];
		$result = mysql_query("SELECT * FROM table_shoes WHERE product_name LIKE '%" .$productname. "%'");
		echo "<table class='table table-bordered table-hover' style='width:100%; text-align:center;'>

		<tr>
		<td id='menutitle'>ID</td>
		<td id='menutitle'>Category Name</td>
		<td id='menutitle'>Product Name</td>
		<td id='menutitle'>Products</td>
		</tr>";

		while ($row = mysql_fetch_array($result)) 
		{
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['category_name']."</td>";
			echo "<td>".$row['product_name']."</td>";
			echo "<td>"."<img src='shoes/{$row['name_upload']}' style='width:300px; height:150px;'>"."</td>";
	//		echo "<td>"."<a href=#productedit>"."Edit"."</a>"."</td>";
			echo "</tr>";
		}
		echo "</table>";


	}
	else
	{
		$result = mysql_query("SELECT * FROM table_shoes");
		echo "<table class='table table-bordered table-hover' style='width:100%; text-align:center;'>

		<tr>
		<td id='menutitle'>ID</td>
		<td id='menutitle'>Category Name</td>
		<td id='menutitle'>Product Name</td>
		<td id='menutitle'>Products</td>
		</tr>";

		while ($row = mysql_fetch_array($result)) 
		{
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['category_name']."</td>";
			echo "<td>".$row['product_name']."</td>";
			echo "<td>"."<img src='shoes/{$row['name_upload']}' style='width:300px; height:150px;'>"."</td>";
	//		echo "<td>"."<a href=#productedit>"."Edit"."</a>"."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
?>	
</div>


	</body>
</html>