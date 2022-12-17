<?php 
require_once 'include.php';

if(!isset($_SESSION['uid'])){
	header("Location:login.php");
	exit();
}
$sql="select * from lost_pet";
$result=mysqli_query($link, $sql);

if($result&&mysqli_num_rows($result))	{
	while($row=mysqli_fetch_assoc($result)){
		$data[]=$row;
	}	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Wenzhou-Kean University Animal Protection</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/lostPet-main.css">
<link rel="stylesheet" type="text/css" href="static/pageGroup.css">
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
					<li><a href="index.php">Go Back</a></li>
					<li><a href="php/out.php">Log Out</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="content">
		<div class="cont-inner">
			<div class="cont-title">
				<h2>Lost and Found Pets</h2>
			</div>

			<div class="main-map">
				<iframe src="map/map_lost.php" width="1000" height="300" frameborder="0" scrolling="no" style="text-align:center;"></iframe>
			</div>

			<ul class="news">
<?php 
	if(!empty($data)){
		foreach($data as $value){
?>	
			<li>
			<div class="int-inner">
				<div class="top" id="first">
					<a href="lost-pet-detail.php?id=<?php echo $value['id']?>">
						<img src="<?php echo $value['bin_data'];?>"/>
					</a>
				</div>
				<div class="bottom">
					<p>Missing Location: <?php echo $value['place'];?><br/>Missing Time: <?php echo $value['time'];?><br/>Appearance: <?php echo $value['property'];?>
					</p>
				</div>
			</div>
			</li>
			
<?php }}?>
			</ul>
		</div>
		<div class="page">
			<input type="hidden" id="start_page">
	        <input type="hidden" id="current_page" />
	        <input type="hidden" id="show_per_page" />
	        <input type="hidden" id="end_page">
	     
			<div id="pageGro" class="cb">
			    <div class="pagestart">First Page</div>
				<div class="pageUp">Previous Page</div>
			    <div class="pageList">
			        <ul>
			            <li>1</li>
			            <li>2</li>
			            <li>3</li>
			            <li>4</li>
			            <li>5</li>
			        </ul>
			    </div>
			    <div class="pageDown">Next Page</div>
			    <div class="pageend">Last Page</div>
			</div>

		</div>
		<br>
		<br>
		<div class="cont-btn">
			<input type="button" class="button" value="Post" onclick="location.href='lostPetSubmit.php'" />
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
<script type="text/javascript" src="static/jquery1.42.min.js"></script>
<script type="text/javascript" src="static/pageGroup1.js"></script>
</body>
<footer>
  <p>All right received by WKU students</p>
</footer>
</html>