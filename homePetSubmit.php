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
<link rel="stylesheet" type="text/css" href="css/homePetSubmit.css">
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
					<li class="php"><?php 
					$uid=$_SESSION['uid'];
				if ($_SESSION['policy']==1){
					$htmlCode="<a href=\"personal/personal.php?id=$uid\">Welcome ";
					echo $htmlCode;
				} else {
					$htmlCode="<a href=\"admin/admin.php\">Welcome ";
					echo $htmlCode;
				}
					?> <?php echo $_SESSION['username']?></a>
					</li>
					<li><a href="pet-main.php">Go Back</a></li>
					<li><a href="php/out.php">Log Out</a></li>
				</ul>
				</div>
				
			</div>
			
		</div>
	</div>
	<br>
	<div class="content">
			<div class="cont-title">
				<h2>Upload Adoption</h2>
			</div>
			<div class="cont-inner">
			<form action="php/petSubmit.handle.php" method="post" enctype="multipart/form-data">
				<table>
					<tr class="inner-main">
						<td>Insert image: </td>
						<td><input type="file" name="pet-submit"></td>
					</tr>
					<tr class="inner-main">
						<td>Species: </td>
						<td><input type="text" name="category"/></td>
					</tr>
					<tr class="inner-main">
						<td>Address: </td>
						<td><input type="text" name="place"/></td>
					</tr>
					<tr class="inner-main">
						<td>Gender: </td>
						<td><input type="text" name="sex"/></td>
					</tr>
					<tr class="inner-main">
						<td>Age: </td>
						<td><input type="text" name="age"/></td>
					</tr>
					<tr class="inner-main">
						<td>Vaccination Status: </td>
						<td><input type="text" name="vacc"/></td>
					</tr>
					<tr class="inner-main">
						<td>Characteristics: </td>
						<td><input type="text" name="message"/></td>
					</tr>
				</table>
				<div class="cont-btn">
					<input class="button" type="submit" value="Upload">
				</div>
				</form>
		</div>
	</div>
<!-- 	<div class="footer">
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