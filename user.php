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
						<!--		<li><a href="#resellerform" data-toggle="modal">Re-Seller Form</a></li> -->
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

<div id="contentupload">
<table class='table table-bordered table-hover' style='width:100%; text-align:center; '>
		<tr>
			<td id='menutitle' style="color:blue;">BEFORE YOU FILL UP & ORDER, PLEASE READ & UNDERSTAND OUR POLICY.</td>
		</tr>
		<td>
 			 <p style="text-align:left;">

			&#9830;	 PAYMENT MUST BE MADE THE NEXT DAY BEFORE 1PM. [OR IT WILL DEPEND ON THE TIME GIVEN] CUT OFF TIME IS 2PM.<br>
			&#9830;	 NO CANCELLATION OF ORDERS ONCE THIS FORM HAS BEEN SUBMITTED. WE DON'T LIKE AND TOLERATE BOGUS BUYERS & JOY RESERVERS.<br><br>
 
			&#9830; SHIPPING WOULD TAKE 1 TO 2 DAYS AFTER YOU HAVE MADE THE PAYMENT. [Sundays are not included]<br>
 
			&#9830; FREE SHIPPING FOR AREAS WITHIN THE PHILIPPINES :)<br>

 				<br>
 			</p>
				<p style="text-align:left;" id="bold">SEND ME YOUR COMPLETE INFORMATION:</p>
				<p style="text-align:left;">
			&#9830;	 COMPLETE NAME: <br>
			&#9830;	 COMPLETE HOME ADDRESS: [house #] [street name] [village/subd.] [city] [province].<br>
			&#9830;	 CONTACT NUMBER:<br>
			&#9830;	 MODE OF PAYMENT: (BDO ,BPI, LBC, western union, m. lhuillier, cebuana, G-CASH, Palawan Pawnshop).<br>
			&#9830;	 UPLOAD OF ITEM TO PURCHASE: (with Name of the Products)<br><br>
				Send this via FB message <a href="https://www.facebook.com/PaigeRoxasTwentyEight">Paige RoxasTwentyEight</a>. Then wait for my reply. :)

 				</p>
				<p style="text-align:left;" id="bold">MEET UPS:</p><br>
 				<p style="text-align:left;">
				&#9830;	Sm Southmall [FRIDAYS ONLY].<br>
				&#9830;	 Mcdo ATC.<br>
				&#9830;	 Seattles Best Coffee Festival Mall.<br>
				&#9830;	 SM MOA [SUNDAYS ONLY] (11am-1pm or 7pm-8pm) [BlueWave or Mcdonalds beside Fitness First Gym].<br><br>
				Please don't ask kung pwede pa po sa ibang lugar, kung ano lang po ang nanjan, dun lang po =) <br><br>
 
				Thank You and Good Day! =)

				</p>
		</td>
</table>

	<table class='table table-bordered table-hover' style='width:100%; text-align:center; '>
		<tr>
			<td id='menutitle' style="color:blue;">INTERNATIONAL SHIPPING</td>
		</tr>
		<td>
			 <p style="text-align:left;" id="bold">GO TO ORDER FORM FILL UP THE FOLLOWING WITH YOUR COMPLETE INFORMATION:</p><br>
 			 <p style="text-align:left;">
				a. COMPLETE NAME: <br>
				b. COMPLETE HOME ADDRESS:<br>
				c. CONTACT NUMBER:<br>
				d. MODE OF PAYMENT: (BDO bank/ BPI bank/ western union/ m. lhuillier/ cebuana)<br>
				e. UPLOAD OF ITEM TO PURCHASE: (with Name of the Products)<br>
 				<br>
 			</p>
				<p style="text-align:left;" id="bold">NOTE:</p>
				<p style="text-align:left;">
				WE WILL GIVE YOU THE TOTAL AMOUNT ONCE ORDER FORM IS COMPLETE.<br>
				
				SHIPPING FEE WILL DEPEND ON THE WEIGHT OF YOUR PACKAGE.<br><br>
 				</p>
				<p style="text-align:left;" id="bold">PLEASE READ!!! POLICY:</p><br>
 				<p style="text-align:left;">
				* STRICTLY NO CANCELLATION OF ORDERS AFTER SUBMITTING THE ORDER FORM.<br>
				* INTERNATIONAL SHIPPING WILL TAKE EITHER 4 TO 7 DAYS OR 7 TO 15 DAYS DEPENDING ON THE RATE OF SHIPPING YOU WILL CHOOSE.<br>
				* PACKAGE TRACKING NUMBER WILL BE POSTED ON THE SHIPPING RECEIPTS ALBUM ONCE PAYMENT IS SETTLED & ONCE PACKAGE IS SENT.<br>
				* YOU CAN TRACK YOUR PACKAGE HERE FOR YOUR CONVENIENCE. >>www.xend.com.ph<br><br>
 
				YOU CAN CONTACT ME VIA FACEBOOK OR THIS SITE, WECHAT, VIBER, iMESSAGE, OR WHATSAPP
				REGISTERED NUMBER: 0906-282-4182
				</p>
		</td>
	</table>
</div>



<div id="footeruser">
	<div class="navbar navbar-default navbar-static-bottom">
		<div class="container">
			<p style="text-align:center; font-weight:bold;"> &copy; 2014 TWENTY EIGHT . ALL RIGHTS RESERVED.</p>
		</div>
	</div>
</div>

	</body>
</html>