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
//查询评论
$sql1="select * from comment where pid=$pid";
$result1=mysqli_query($link, $sql1);
		if($result1&&mysqli_num_rows($result1))	{
			while($row1=mysqli_fetch_assoc($result1)){
				$data1[]=$row1;
			}
		}
//查找发布者
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
<link rel="stylesheet" type="text/css" href="css/pet-detail.css">
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
					<li class="php">Welcome <?php 
					$uid=$_SESSION['uid'];
				if ($_SESSION['policy']==1){
					$htmlCode="<a href=\"personal/personal.php?id=$uid\">";
					echo $htmlCode;
				} else {
					$htmlCode="<a href=\"admin/admin.php\">";
					echo $htmlCode;
				}
					?> <?php echo $_SESSION['username']?></a>
					</li>
					<li><a href="pet-main.php">Go Back</a></li>
					<li><a href="php/out.php">Log out</a></li>
				</ul>
				</div>
				
			</div>
			
		</div>
	</div>
	<div class="content">
		<div class="cont-main">
			<div class="main-title"><h2>Pet Adoption Details</h2><h5>Posted By: <?php echo $row2['username'];?></h5></div>

			<form method="post" action="php/get.handle.php?id=<?php echo $pid ?>">
				<input type="hidden" name="bin-data" value="<?php echo $data?>" />
				<input type="hidden" name="pet-user-id" value="<?php echo $puid?>" />
				<input type="hidden" name="username" value="<?php echo $username?>" />
				<div class="main-img"><img src="<?php echo $data?>"></div>
				<div class="main-inner">
					<ul>
						<li>Species: <?php echo $cate?></li>
						<li>Address: <?php echo $place?></li>
						<li>Gender: <?php echo $sex?></li>
						<li>Age: <?php echo $age?></li>
						<li>Vaccination Status: <?php echo $vacc?></li>
						<li>Characteristics: <?php echo $mes?></li>
					</ul>
				</div>
				<div class="main-btn">
					<input class="button" type="submit" value="Adopt">
				</div>
			</form>
		</div>
		<div class="cont-com">
<?php 
		if(!empty($data1)){
			foreach($data1 as $value1){
	?>
			<div class="com-user">
				User: <?php echo $value1['username']?>
			</div>
			<div class="com-main">
				Comment: <?php echo $value1['message']?>
				<span id="time">Time: <?php echo $value1['time'] ?></span>
				<span id="del"> <a href="php/pinglun.del.php?id=<?php echo $value1['id']?>"><input type="button" value="Delete"></a></span>
			</div>
<?php }} ?>
		</div>
		<div class="pinglun">
			<form method="post" action="php/pinglunSubmit.handle.php">
				<input type="hidden" name="pid" value="<?php echo $pid?>"/>
				<input type="hidden" name="uid" value="<?php echo $uid?>"/>
				<input type="hidden" name="username" value="<?php echo $username?>" />
				<div class="pinglun_text">
					<textarea name="message"></textarea>
				</div>
				<div class="pinglun_btn">
					<input type="submit" class="button" value="Submit"/>
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