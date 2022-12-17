<?php
require_once 'include.php';
if(!isset($_SESSION['uid'])){
	header("Location:login.php");
	exit();
}
$uid=$_GET['id'];
//获取用户信息
$sql5="select * from user_data where uid=$uid";
$result5=mysqli_query($link, $sql5);
$res5=mysqli_fetch_row($result5);
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
					<li>Real Name: <span><?php echo $res5[1]?></span></li>
					<li>Gender: <span><?php echo $res5[2]?></span></li>
					<li>Address: <span><?php echo $res5[3]?></span></li>
					<li>Tel: <span><?php echo $res5[4]?></span></li>
				</ul>
				
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