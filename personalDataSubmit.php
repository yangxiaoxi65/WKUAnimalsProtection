<?php
session_start();
if(!isset($_SESSION['uid'])){
	header("Location:login.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Wenzhou-Kean University Animal Protection</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/personDataSubmit.css">
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="header-top">
				<a href="#" id="logo"><img src="img/logo.png" width="310" height="114" alt=""></a>
				<div class="htitle"><h1><a href="#">Wenzhou-Kean University Animal Protection</a></h1></div>
				<div class="hbtn">
					<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="php/out.php">Log Out</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="cot-title">
			<h2>Fill in the Real Information</h2>
		</div>
		<div class="cot-inner">
			<form method="post" action="php/personalSub.handle.php" onsubmit="checkform()">
				<ul>
					<li>Real Name: <span><input id="real-name" type="text" name="real-name" /></span></li>
					<li class="tc">Gender: <span><input id="sex" type="text" name="sex" /></span></li>
					<li class="tc">Address: <span><input id="place" type="text" name="place" /></span></li>
					<li>Tel: <span><input id="phone" type="text" name="phone" /></span></li>
				</ul>
				<div>
					<input class="button" type="submit" name="submit" value="Submit"/>	
				</div>
			</form>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<ul>
		        <li class="icon1">Wenzhou Kean University</li>
		        <li class="icon2">Created by Yang Xiaoxi</li>
		        <li class="icon3">Contect me via yangxi@kean.edu</li>
			</ul>
		</div>
	</div>
</body>
<footer>
  <p>All right received by WKU students</p>
</footer>
</html>