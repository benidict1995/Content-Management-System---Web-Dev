<?php
session_start();
	
	if(isset($_SESSION['user_type']))
	{
		if($_SESSION['user_type'] == 1)
		{
			header('Location: admin.php');
		}else
		{
			header('Location: user.php');
		}
	}
	include 'db\global.php';
?>
<html>
	<head>
		<title></title>
		<meta	name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/png" href="img/benjie.png">
		<link rel="stylesheet" type="text/css" href="css/twenty8.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/nivo-slider.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/lgray.css">
		<link rel="stylesheet" type="text/css" href="css/core.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery.slides.js"></script>
		<script src="js/jquery.slides.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>

		<script type="text/javascript">
			$(window).load(function(){
				$('#slidepadala').nivoSlider({
					effect:'random',
					directionNavHide: true,
					directionNav: false,
					controlNav: false});

			$('#coveritem').nivoSlider({
					effect:'random',
					directionNavHide: true,
					directionNav: false,
					controlNav: false});

			$('#covershoes').nivoSlider({
					effect:'random',
					directionNavHide: true,
					directionNav: false,
					controlNav: false});

			$('#covercap').nivoSlider({
					effect:'random',
					directionNavHide: true,
					directionNav: false,
					controlNav: false});

				});
		</script>

	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<a href="index.php" class="navbar-brand" id="titlehead">Twenty Eight</a>
		<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<li><a href="#login" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Log In</a></li>
					 	<li><a href="#member" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span> Sign-Up</a></li>
					</li>
				</ul>
			</div>
		</div>
	</div>		
	
<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
			<a data-dismiss="modal" class="nav navbar-nav navbar-right"><span class="glyphicon glyphicon-remove"></span></a>
				<h4>Log In:</h4>
			</div>
			<div class="modal-body">
				<form action="login.php" method="post">
					<input type="text" class="form-control" placeholder="Username" name="Username"/required="required"><br><br>
					<input type="password" class="form-control" placeholder="Password" name="Password"/required="required"><br><br>
					<input type="submit" name="submit" value="Sign-In">
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="member" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<a data-dismiss="modal" class="nav navbar-nav navbar-right"><span class="glyphicon glyphicon-remove"></span></a>
				<h4>Sign-Up:</h4>
			</div>
			<div class="modal-body">
				<form action="user_add.php" method="post">
					<input type="text" class="form-control" placeholder="Firstname" name="Firstname"/required="required"><br>
					<input type="text" class="form-control" placeholder="Lastname"  name="Lastname"/required="required"><br>
					<input type="text" class="form-control" placeholder="Username"  name="Username"/required="required"><br>
					<input type="password" class="form-control" placeholder="Password"  name="Password"/required="required"><br>
					<input type="password" class="form-control" placeholder="Confirm Password" name="CPassword"/required="required"><br>
					<input type="submit" value="Sign-Up">
				</form>
			</div>
		</div>
	</div>
</div>

<div id="coverphotoindex">
<?php
	$sql = 'SELECT * FROM cover_upload ORDER BY id DESC LIMIT 1';
	$result = mysql_query($sql);

	while ($row = mysql_fetch_assoc($result)) {
		echo "<img src='uploaded/{$row['name']}' style = 'width:800px; height:250px;'>";
	}
?>
</div>

<div id="holdall">

<div id="coverboys">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
			<div class="item active">
				<?php
					
					$sql = 'SELECT * FROM cover_boys ORDER BY id DESC LIMIT 1';
					$result = mysql_query($sql);
					while ($row = mysql_fetch_assoc($result)) {
					//	echo "<div class='item'>";
					echo "<a href='#'>";
					echo"<img src='boys_photo/{$row['name']}' class='img-responsive' style='height:440px; width:325px;'> ";
					echo "</a>";
				//	echo "</div>";
					}
					
				?> 
			</div>
		</div>
		<a class="carousel-control left" href="#myCarousel">
		</a>
		<a class="carousel-control right" href="#myCarousel">
		</a> 
	</div>
</div>

<div id="covergirls">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
			<div class="item active">
				<?php
					
					$sql = 'SELECT * FROM cover_girls ORDER BY id DESC LIMIT 1';
					$result = mysql_query($sql);
					while ($row = mysql_fetch_assoc($result)) {
					//	echo "<div class='item'>";
					echo "<a href='#'>";
					echo"<img src='girls_photo/{$row['name']}' class='img-responsive' style='height:440px; width:325px;'> ";
					echo "</a>";
				//	echo "</div>";
					}
					
				?> 
			</div>
		</div>
		<a class="carousel-control left" href="#myCarousel">
		</a>
		<a class="carousel-control right" href="#myCarousel">
		</a> 
	</div>
</div>

<div id="coverpadala">
	<div id="slidepadala">
	<?php
			$sql = 'SELECT * FROM cover_padala';
			$result = mysql_query($sql);
			while ($row = mysql_fetch_array($result)) 
			{
				echo"<img src='padala_photo/{$row['name']}'  class='img-responsive' style='width:150; height:200;'> ";
			}
	?> 
	</div>
</div>


<div id="covershoes">
	<?php
			$sql = 'SELECT * FROM cover_shoes';
			$result = mysql_query($sql);
			while ($row = mysql_fetch_array($result)) 
			{
				echo"<img src='cover_shoes/{$row['name']}'  class='img-responsive' style='width:150; height:200;'> ";
			}
	?>
</div>

<div id="coveritem">
	<?php
			$sql = 'SELECT * FROM cover_item';
			$result = mysql_query($sql);
			while ($row = mysql_fetch_array($result)) 
			{
				echo"<img src='cover_item/{$row['name']}'  class='img-responsive' style='width:400; height:320;'> ";
			}
	?>
</div>

<div id="covercap">
	<?php
			$sql = 'SELECT * FROM cover_cap';
			$result = mysql_query($sql);
			while ($row = mysql_fetch_array($result)) 
			{
				echo"<img src='cover_cap/{$row['name']}'  class='img-responsive' style='width:400; height:320;'> ";
			}
	?>
</div>

<div id="footerindex">
	<div class="navbar navbar-default navbar-static-bottom">
		<div class="container">
			<p style="text-align:center; font-weight:bold;"> &copy; 2014 TWENTY EIGHT . ALL RIGHTS RESERVED.</p>
		</div>
	</div>
</div>

</div>
</body>
</html>