<?php

require_once ("include.php");
if(!isset($_SESSION['uid'])){
	header("Location:login.php");
	exit();
}
$id=$_GET['id'];
$sql="select * from lost_pet where id = $id";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_assoc($result);

$place=$row['place'];
$time=$row['time'];
$cate=$row['category'];
$prop=$row['property'];
$other=$row['other'];
$data=$row['bin_data'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Wenzhou-Kean University Animal Protection</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/lostPetSubmit.css">
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
					<li><a href="lostPet-main.php">Go Back</a></li>
					<li><a href="php/out.php">Log Out</a></li>
				</ul>
				</div>		
			</div>
		</div>
	</div>
	<div class="content">
		<div class="cont-title">
			<h2>Modify the Information of the Lost Pet</h2>
		</div>
		<div class="cont-inner">
		<form method="post" action="php/lostPetModify.handle.php" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id;?>">
			<div class="map">
				<iframe class="map" src="map/map.change.php"style="margin:20px auto;color:#fff;width:600px;height:400px; frameborder="0" scrolling="no" "></iframe>
			</div>
			<div class="col">
				<table>
					<tr class="inner-main">
						<td>Species: </td>
						<td><input type="text" name="category" value="<?php echo $cate?>"/></td>
					</tr>
					<tr class="inner-main">
						<td>Insert image: </td>
						<td><input type="file" name="lost-pet-modify"/></td>
					</tr>
					<tr class="inner-main">
						<td>Missing Location: </td>
						<td><input type="text" name="place" id="map" value="<?php echo $place;?>"/></td>
					</tr>
					<tr class="inner-main">
						<td>Missing Time: </td>
						<td><input type="date" name="time" value="<?php echo $time;?>" /></td>
					</tr>
					<tr class="inner-main">
						<td>Appearance: </td>
						<td><input type="text" name="property" value="<?php echo $prop;?>"/></td>
					</tr>
					<tr class="inner-main">
						<td>Other Information: </td>
						<td><input type="text" name="other" value="<?php echo $other;?>"/></td>
					</tr>
					<tr class="inner-main">
						<td>Longitude: </td>
						<td><input type="text" name="jing" id="jing_du" value=""/></td>
					</tr>
					<tr class="inner-main">
						<td>Latitude: </td>
						<td><input type="text" name="wei" id="wei_du" value=""/></td>
					</tr>
				</table>
			</div>
		<div class="cont-btn">
			<input class="button" type="submit" value="Modify" />
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
<a href="#" id="logo"><img src="img/logo.png" width="310" height="114" alt=""></a>
<footer>
  <p>All right received by WKU students</p>
</footer>
</html>