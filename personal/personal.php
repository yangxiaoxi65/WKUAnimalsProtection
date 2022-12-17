<?php
require_once '../include.php';
$uid = $_GET['id'];
$nid=$_SESSION['uid'];
if(!isset($_SESSION['uid'])||$uid!=$nid){
	header("Location:../login.php");
	exit();
}


//获取家养宠物信息
$sql = "select * from home_pet where uid=$uid";
$result = mysqli_query ( $link, $sql );
if ($result && mysqli_num_rows ( $result )) {
	while ( $row = mysqli_fetch_assoc ( $result ) ) {
		$data [] = $row;
	}
}
//获取流浪宠物信息
$sql1 = "select * from stary_pet where uid=$uid";
$result1 = mysqli_query ( $link, $sql1 );
if ($result1 && mysqli_num_rows ( $result1 )) {
	while ( $row1 = mysqli_fetch_assoc ( $result1 ) ) {
		$data1 [] = $row1;
	}
}
//获取走失宠物信息
$sql2 = "select * from lost_pet where uid=$uid";
$result2 = mysqli_query ( $link, $sql2 );
if ($result2 && mysqli_num_rows ( $result2 )) {
	while ( $row2 = mysqli_fetch_assoc ( $result2 ) ) {
		$data2 [] = $row2;
	}
}
//获取领养宠物请求
$sql3 = "select * from oncheck where puid=$uid";
$result3 = mysqli_query ( $link, $sql3 );
if ($result3 && mysqli_num_rows ( $result3 )) {
	while ( $row3 = mysqli_fetch_assoc ( $result3 ) ) {
		$data3 [] = $row3;
	}
}
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
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/personal.css">
<link rel="stylesheet" type="text/css" href="../static/bootstrap.min.css">
<style> 
a{text-decoration:none} 
a:hover{text-decoration:none} 
a:visited{text-decoration:none}
</style> 
</head>
<script>
	function act (a){
		a.style.background="#B7E9C4";
		}
	function act2 (a){
		a.style.background="#fda600";
		}
	function Tab(num)
	{
	    var i;
	    for(i=1;i<=4;i++)
	    {
	        if(i==num)
	           document.getElementById("d"+i).style.display="block";
	         else
	           document.getElementById("d"+i).style.display="none";
	    }
	}

	function Tab1(num)
	{
	    var i;
	    for(i=1;i<=4;i++)
	    {
	        if(i==num)
	           document.getElementById("col"+i).style.display="block";
	         else
	           document.getElementById("col"+i).style.display="none";
	    }
	}
</script>
<body>
	<div class="header">
		<div class="container">
			<div class="header-top">
				<a href="#" id="logo"><img src="../img/logo.png" width="310" height="114" alt=""></a>
				<h1>
            		<a href="#">Wenzhou-Kean University Animal Protection</a>
          		</h1>
				<div class="hbtn">
					<ul>
					<li><a href="../index.php">Home</a></li>
					<li class="php"><a href="#">Welcome <?php echo $_SESSION['username']?></a>
					<li><a href="#">Help</a></li>
					<li><a href="../login.php">Log Out</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="cont-title">
				<h2>Personal Center	</h2>
			</div>
			<div class="cont-inner">
				<div class="inner-col">
					<ul>
						<a href="#"><li onmouseover="act(this)" onmouseout="act2(this)" onclick="Tab(1)">Personal Information</li></a>
						<a href="#"><li onmouseover="act(this)" onmouseout="act2(this)" onclick="Tab(2)">Posted Information</li></a>
						<a href="#"><li onmouseover="act(this)" onmouseout="act2(this)" onclick="Tab(3)">Other Information</li></a>
					</ul>
				</div>
				<div class="grzl" id="d1">
					<ul>
						<li>Real Name: <span><?php echo $res5[1]?></span></li>
						<li>Gender: <span><?php echo $res5[2]?></span></li>
						<li>Address: <span><?php echo $res5[3]?></span></li>
						<li>Tel: <span><?php echo $res5[4]?></span></li>

					</ul>
										
				</div>
				<div class="cont-btn">
				<input type="button" class="button" value="Change Password" onclick="location.href='../pwChange.php?id=<?php echo $uid;?>'" />
		</div>
				<div class="fbxx" id="d2">
					<div class="fbxx-title">
						<ul>
							<a href="#" onclick="Tab1(1)"><li>Pet Adoption</li></a>
							<a href="#" onclick="Tab1(2)"><li>Stray Animals</li></a>
							<a href="#" onclick="Tab1(3)"><li>Lost Pets</li></a>
						</ul>
					</div>
					<div class="col1" id="col1">
<?php
if (! empty ( $data )) {
	foreach ( $data as $value ) {
?>
					<div class="col1-inner">
						<div class="col1l">
							<a href="../pet-detail.php?id=<?php echo $value['id']?>">
								<img src="../<?php echo $value['bin_data'];?>">
							</a>
						</div>
						<div class="col1r">
							<ul>
								<li>Species: <?php echo $value['category'];?></li>
								<li>Location: <?php echo $value['place'];?></li>
								<li>Safety Status: <?php echo $value['vacc'];?></li>
								<a href="../homePetModify.php?id=<?php echo $value['id']?>">Modify</a> 
								<a href="../php/pet.del.handle.php?id=<?php echo $value['id']?>">Delete</a>
							</ul>
						</div>
					</div>
<?php }}?>						
					</div>
					<div class="col2" id="col2">
<?php
if (! empty ( $data1 )) {
	foreach ( $data1 as $value1 ) {
?>
					<div class="col2-inner">
						<div class="col2l">
							<a href="../pet-detail.php?id=<?php echo $value1['id'];?>">
								<img src="../<?php echo $value1['bin_data'];?>">
							</a>
						</div>
						<div class="col2r">
							<ul>
								<li>Species: <?php echo $value1['category'];?></li>
								<li>Location: <?php echo $value1['place'];?></li>
								<li>Safety Status: <?php echo $value1['safe'];?></li>
								<a href="../pet.modify.php?id=<?php echo $value1['id']?>">Modify</a> 
								<a href="../php/staryPet.del.handle.php?id=<?php echo $value1['id']?>">Delete</a>
							</ul>
						</div>
					</div>
<?php }}?>
					</div>
					<div class="col3" id="col3">
<?php
if (! empty ( $data2 )) {
	foreach ( $data2 as $value2 ) {
?>
					<div class="col3-inner">
						<div class="col3l">
							<a href="../lost-pet-detail.php?id=<?php echo $value2['id'];?>">
								<img src="../<?php echo $value2['bin_data'];?>">
							</a>
						</div>
						<div class="col3r">
							<ul>
								<li>Species: <?php echo $value2['category'];?></li>
								<li>Missing Location: <?php echo $value2['place'];?></li>
								<li>Missing Time: <?php echo $value2['time'];?></li>
								<li>Appearance：<?php echo $value2['property'];?></li>
								<a href="../lostPetModify.php?id=<?php echo $value2['id']?>">Modify</a> 
								<a href="../php/lostPet.del.handle.php?id=<?php echo $value2['id']?>">Delete</a>
							</ul>
						</div>
					</div>
<?php }}?>
					</div>
					
				
				</div>
				<div class="qtxx" id="d3">
					<?php
					if (! empty ( $data3 )) {
						foreach ( $data3 as $value3 ) {
					?>
										<img src="../<?php echo $value3['bin_data']?>" />
										<span>Unser
											<a href="../personalData.php?id=<?php echo $value3['user_id']?>"><?php echo $value3['username']?>
											</a>Request for Adoption
										</span>
											<a href="../php/oncheck.handle.php?pid=<?php echo $value3['pid']?>">
											<input	type="button" value="Confirm" />
										</a>
					<?php }}?>	
				</div>
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