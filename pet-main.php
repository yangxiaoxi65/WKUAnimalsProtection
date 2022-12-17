<?php 
		require_once 'include.php';
		
		if(!isset($_SESSION['uid'])){
			header("Location:login.php");
			exit();
		}
		$sql="select * from home_pet  order by id asc";
		$result=mysqli_query($link, $sql);
		if($result&&mysqli_num_rows($result))	{
			while($row=mysqli_fetch_assoc($result)){
				$data[]=$row;
			}
		
			
		}
		$sql1="select * from stary_pet order by id asc";
		$result1=mysqli_query($link, $sql1);
			
		if($result1&&mysqli_num_rows($result1))	{
			while($row1=mysqli_fetch_assoc($result1)){
				$data1[]=$row1;
			}
				
				
		}		
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Wenzhou-Kean University Animal Protection</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/pet-main.css">
<link rel="stylesheet" type="text/css" href="static/pageGroup.css">
</head>
<script>
	function up (a){
		a.style.opacity="0.8";
		a.style.top="20px"
		}
	function down (a){
		a.style.opacity="0";
		a.style.top="0px"
		}
</script>
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
						
						<li><a href="#">Help</a></li>
						<li><a href="php/out.php">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="content">
		<div class="cont-inner">
			<div class="cotinnerl">
				<div class="innerl-title">
					<h2>Pet Adoption</h2>
				</div>
				
				<div class="innerl-col">
				<ul class="news">	
					<?php 
						if(!empty($data)){
							foreach($data as $value){
					?>
					<li>
					<div class="innerl-main bd" >
						<img src="<?php echo $value['bin_data']?>"/>
						<div class="innerl-bottom" onmouseover="up(this)" onmouseout="down(this)">
							<a href="pet-detail.php?id=<?php echo $value['id']?>">
							<ul>
								<li>Species: <?php echo $value['category']?></li>
								<li>Address: <?php echo $value['place']?></li>
								<li>Age: <?php echo $value['age']?></li>
								<li>Vaccination Status: <?php echo $value['vacc']?></li>
							</ul>
							</a>
						</div>
					</div>
					</li>
<?php }}?>					
					
				</ul>
				</div>
				<br>

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
				
			</div>
			<br>
			<br>
			<br>
			<br>
			<div class="cot1-btn">
				<input type="button" class="button" value="Upload Adoption" onclick="location.href='homePetSubmit.php'" />
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
<script type="text/javascript" src="static/jquery1.42.min.js"></script>
<script type="text/javascript" src="static/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="static/pageGroup.js"></script>

<script type="text/javascript">
jQuery(".cotinnerr").slide({mainCell:".contr-inner",autoPlay:true,effect:"topMarquee",vis:3,interTime:50});

</script>	
</body>
<footer>
  <p>All right received by WKU students</p>
</footer>
</html>