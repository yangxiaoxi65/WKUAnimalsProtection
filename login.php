<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Wenzhou-Kean University Animal Protection</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
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
					<li><a href="#">About Us</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="cont-title">
			<h2>Log In</h2>							
		</div>
		<form method="post" action="php/login.handle.php">
		<div class="cont-inner">
			<ul>
				<li>Username：<input type="text" name="username" id="username" /></li>	
				<li>Password：<input type="password" name="password" id="password" /></li>
			</ul>
			<div class="cont-btn">
				<input class="button"type="submit" name="submit" value="Log in" />
				<p><a href="signin.php">Do not have an account yet? Please sign in.</a></p>
			</div>
		</div>
		</form>
	</div>
	<!-- <div class="footer">
		<div class="container">
			<ul>
		       	<li class="icon1">Wenzhou Kean University</li>
		      	<li class="icon2">Created by Yang Xiaoxi</li>
		       	<li class="icon3">Contect me via yangxi@kean.edu</li>
			</ul>
		</div>
	</div> -->
</body>
<footer>
  <p>All right received by WKU students</p>
</footer>
</html>