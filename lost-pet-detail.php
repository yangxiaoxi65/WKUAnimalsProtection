<?php 
require_once ("include.php");

if(!isset($_SESSION['uid'])){
	header("Location:login.php");
	exit();
}
$id=$_GET['id'];
$uid=$_SESSION['uid'];
$username=$_SESSION['username'];
$sql="select * from lost_pet where id = $id";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_assoc($result);

$place=$row['place'];
$time=$row['time'];
$cate=$row['category'];
$prop=$row['property'];
$other=$row['other'];
$data=$row['bin_data'];
$puid=$row['uid'];
//查询评论
$sql1="select * from lost_comment where pid=$id";
$result1=mysqli_query($link, $sql1);
		if($result1&&mysqli_num_rows($result1))	{
			while($row1=mysqli_fetch_assoc($result1)){
				$data1[]=$row1;
			}
		}
//查询发布者
$sql2="select * from user where id=$puid";
$result2=mysqli_query($link, $sql2);
$row2=mysqli_fetch_assoc($result2);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Wenzhou-Kean University Animal Protection</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/lost-pet-detail.css">
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
					<li><a href="lostPet-main.php">Go Back</a></li>
					<li><a href="php/out.php">Log Out</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
	<div class="container">
		<div class="cont-title">
			<h2>Lost Pet Details<h5>Posted By: <?php echo $row2['username'];?></h5></h2>
		</div>
		<input type="hidden" name='jing' id='jing' value="<?php echo $row['jing_du']?>"/>
			
		<input type="hidden" name='wei' id='wei' value="<?php echo $row['wei_du']?>"/>
		<div class="cont-main">
			<div class="main-map">
				<iframe src="map/map.php" width="600" height="300" frameborder="0" scrolling="no" style="text-align:center;"></iframe>
			</div>
			<div class="img">
				<img src="<?php echo $data;?>">
			</div>
			<div class="main-inner">
				<form>
					<ul>
						<li>Species: <?php echo $cate?></li>
						<li>Missing Location: <?php echo $place;?></li>
						<li>Missing Time: <?php echo $time;?></li>
						<li>Appearance：<?php echo $prop;?></li>
						<li>Other Information: <?php echo $other;?></li>
						
					</ul>
				</form>
			</div>
		</div>
		<div class="cont-com">
<?php 
		if(!empty($data1)){
			foreach($data1 as $value1){
	?>
			<div class="com-user">
				User：<?php echo $value1['username']?>
			</div>
			<div class="com-main">
				Comment：<?php echo $value1['message']?>
			</div>
<?php }} ?>
		</div>
		<div class="pinglun">
			<form method="post" action="php/lostPinglunSubmit.handle.php">
				<input type="hidden" name="pid" value="<?php echo $id?>"/>
				<input type="hidden" name="uid" value="<?php echo $uid?>"/>
				<input type="hidden" name="username" value="<?php echo $username?>" />
				<div class="pinglun_text">
					<textarea name="message"></textarea>
				</div>
				<div class="pinglun_btn">
					<input type="submit" class="button" value="Comment"/>
				</div>
			</form>
		</div>
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