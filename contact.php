<?php
include("connect.php");
error_reporting(0);
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web Tech Final Project</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
	<div id="header">
		<a href="index.html" class="logo">
			<img src="images/logo.jpg" alt="">
		</a>
		<ul id="navigation">
			<li>
				<a href="index.html">Home</a>
			</li>
			<li>
				<a href="about.html">Today's New</a>
			</li>
			<li>
				<a href="gallery.html">Product</a>
			</li>
			<li>
				<a href="services.html">About Product</a>
			</li>
			<li class="selected">
				<a href="contact.php">Contact Us</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h1><span style="border: 0px; background-color: black; color: white;">Tell Us About Your Opinion</span></h1>
		<form action="" method="">
			<input type="text" name="FirstName" id="fname" placeholder="Your First Name" required>
			<input type="text" name="LastName" id="lname" placeholder="Your Last Name" required>
			<input type="email" name="Email" id="email" placeholder="Email" required>
			<input type="text" name="Number" id="phone" placeholder="Phone Number" required>
			<textarea name="Message" id="message" placeholder="Your Opinion"></textarea>
			<input type="submit" name="send" id="send" value="send" required>
		</form>
	</div>
	<div id="footer">
		<div>
			<p>Developed By Radowan</p>
			<ul>
				<li>
					<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
				</li>
				<li>
					<a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
				</li>
				<li>
					<a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
				</li>
				<li>
					<a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>

<?php
$fn=$_GET['FirstName'];
$ln=$_GET['LastName'];
$em=$_GET['Email'];
$num=$_GET['Number'];
$msg=$_GET['Message'];

$query="INSERT INTO CONTACT VALUES ('$fn','$ln','$em','$num','$msg')";
$data=mysqli_query($conn,$query);
?>
