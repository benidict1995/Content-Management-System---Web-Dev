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

<div id="contentupload">
	<table class='table table-bordered table-hover' style='width:100%; text-align:center; '>
		<tr>
			<td id='menutitle'>Boys Coverphoto</td>
			<td id='menutitle'>Girls Coverphoto</td>
			<td id='menutitle'>Padala Coverphoto</td>	
		</tr>
		<tr>
		<td>
		<form action="cover_boys.php" method="post" enctype="multipart/form-data">
			<input type="file" name="photo"/required><br>
			<input type="submit" name="submit" value="Upload" />
		</form>
		</td>
		<td>
		<form action="cover_girls.php" method="post" enctype="multipart/form-data">
			<input type="file" name="photo"/required><br>
			<input type="submit" name="submit" value="Upload" />
		</form>
		</td>
		<td>
			<form action="coverpadala_upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="photo"/required><br>
			<input type="submit" name="submit" value="Upload" />
		</form>
		</td>
		</tr>
		<td>
			<p>
				Boys Cover:
					You can Choose your model for the Boys Cover Photo, When you Upload the Picture
					it will Auto Resize in the Size of 325x440 pixel. You can upload anything not also picture,
					so be careful because when you try to upload a file like video, text, etc. it will cause
					a broken index into your web page. You can upload All kinds of Photo like jpg, png, gif etc.
			</p>
		</td>
		<td>
			<p>
				Girls Cover:
					You can Choose your model for the Girls Cover Photo, When you Upload the Picture
					it will Auto Resize in the Size of 325x440 pixel. You can upload anything not also picture,
					so be careful because when you try to upload a file like video, text, etc. it will cause
					a broken index into your web page. You can upload All kinds of Photo like jpg, png, gif etc.
			</p>
		</td>
		<td>
			<p>
				Padala Cover:
					You can Upload a Cover photo for the Shipping Payment, Before you Upload the Cover photo you need to resize
					it into the size of 300x220 pixel because the system can't auto resize the cover photo of padala,
					the developer look a solution for the Resizing Picture in Slider. You can Upload Also all kinds of Photo like jpg,
					png, gif, etc. .
			</p>
		</td>
	</table>
<!---       2ND TABLE                    -->
	<table class='table table-bordered table-hover' style='width:100%; text-align:center; '>
			<tr>
			<td id='menutitle'>Item Coverphoto</td>
			<td id='menutitle'>Shoes Coverphoto</td>
			<td id='menutitle'>Cap Coverphoto</td>	
		</tr>
		<tr>
		<td>
		<form action="coveritem_upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="photo"/required><br>
			<input type="submit" name="submit" value="Upload" />
		</form>
		</td>
		<td>
		<form action="covershoes_upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="photo"/required><br>
			<input type="submit" name="submit" value="Upload" />
		</form>
		</td>
		<td>
			<form action="covercap_upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="photo"/required><br>
			<input type="submit" name="submit" value="Upload" />
		</form>
		</td>
		</tr>
		<td>
			<p>
				Item Cover:
					You can Upload a Item photo , Before you Upload the Item photo you need to resize
					it into the size of 400x320 pixel because the system can't auto resize the cover photo of Item,
					the developer look a solution for the Resizing Picture in Slider. You can Upload Also all kinds of Photo like jpg,
					png, gif, etc. .
			</p>
		</td>
		<td>
			<p>
				Shoes Cover:
					You can Upload a Shoes photo , Before you Upload the Shoes photo you need to resize
					it into the size of 300x220 pixel because the system can't auto resize the cover photo of Shoes,
					the developer look a solution for the Resizing Picture in Slider. You can Upload Also all kinds of Photo like jpg,
					png, gif, etc. .
			</p>
		</td>
		<td>
			<p>
				Cap Cover:
					You can Upload a Cap photo , Before you Upload the Cap photo you need to resize
					it into the size of 400x320 pixel because the system can't auto resize the cover photo of Cap,
					the developer look a solution for the Resizing Picture in Slider. You can Upload Also all kinds of Photo like jpg,
					png, gif, etc. .
			</p>
		</td>
	</table>
</div>

<div id="holdon">
<div id="footer">
	<div class="navbar navbar-default navbar-static-bottom">
		<div class="container">
			<p style="text-align:center; font-weight:bold;"> &copy; 2014 TWENTY EIGHT . ALL RIGHTS RESERVED.</p>
		</div>
	</div>
</div>
</div>


</body>
</html>