<?php 
require_once("include.php");

if(!isset($_SESSION['uid'])){
	header("Location:login.php");
	exit();
}
mysqli_query($link,'set names utf8 ');
$pid=$_GET['id'];
$uid=$_SESSION['uid'];
$username=$_SESSION['username'];

$sql="select * from home_pet where id=$pid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_assoc($result);
	
	$data=$row['bin_data'];
	
	$cate=$row['category'];
	$place=$row['place'];
	$sex=$row['sex'];
	$age=$row['age'];
	$vacc=$row['vacc'];
	$mes=$row['message'];
	$puid=$row['uid'];
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
					<li><a href="#">Log In</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="php/out.php">Log Out</a></li>
				</ul>
				</div>
				
			</div>
			
		</div>
	</div>
	<div class="content">
			<div class="cont-title">
				<h2>Modify the Information of the Adopted Pet</h2>
			</div>
			<div class="cont-inner">

			<form action="php/pet.modify.handle.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $pid ?>"/>
				<table>
					<tr class="inner-main">
						<td>Insert image: </td>
						<td><input type="file" name="pet-modify"></td>
					</tr>
					<tr class="inner-main">
						<td>Species: </td>
						<td><input type="text" name="category" value="<?php echo $cate?>" /></td>
					</tr>
					<tr class="inner-main">
						<td>Address: </td>
						<td><input type="text" name="place" value="<?php echo $place?>" /></td>
					</tr>
					<tr class="inner-main">
						<td>Gender: </td>
						<td><input type="text" name="sex" value="<?php echo $sex?>" /></td>
					</tr>
					<tr class="inner-main">
						<td>Age: </td>
						<td><input type="text" name="age" value="<?php echo $age?>" /></td>
					</tr>
					<tr class="inner-main">
						<td>Vaccination Status: </td>
						<td><input type="text" name="vacc" value="<?php echo $vacc?>" /></td>
					</tr>
					<tr class="inner-main">
						<td>Characteristics: </td>
						<td><input type="text" name="message" value="<?php echo $mes?>" /></td>
					</tr>
				</table>
				<div class="cont-btn">
					<input class="button" type="submit" value="Modify">
				</div>
				</form>
		</div>
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