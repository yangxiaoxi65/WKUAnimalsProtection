<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Wenzhou-Kean University Animal Protection</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<script>
  function up(a){
    a.style.bottom="0";
    a.style.lineHeight="350px";
    }
  function down(a){
    a.style.bottom="-300px";
    a.style.lineHeight="30px";
    }
</script>
<body>
  <div class="header">
    <div class="container">
      <div class="header-top">
        
        <a href="#" id="logo"><img src="img/logo.png" width="310" height="114" alt=""></a>
        <div class="htitle">
          <h1>
            <a href="#">Wenzhou-Kean University Animal Protection</a>
          </h1>
          
        </div>
        <div class="hbtn">
          <ul>
            <li><a href="index.php">Home</a></li>

            <li class="php">
              <?php 
              session_start();
              $uid=$_SESSION['uid'];
              if(isset($_SESSION['uid'])){
                if ($_SESSION['policy']==1){
                  $htmlCode="<a href=\"personal/personal.php?id=$uid\">Welcome ";
                  echo $htmlCode;
                  echo $_SESSION['username'];
                  
                } 
                else {
                  $htmlCode="<a href=\"admin/admin.php\">Welcome ";
                  echo $htmlCode;
                  echo $_SESSION['username'];
                  
                }
               ?></a>
               <?php 
              }

              else{
                $htmlCode="<a href='login.php'>Log In</a>";
                echo $htmlCode;
              }
            ?>
            </li>
             <li><a href="#">Help</a></li> 
              <li><a href="php/out.php">Log Out</a></li> 
          </ul>
        </div>
      
      </div>

      <div class="slider">
        <div class="sli-inner">
          
          <ul class="infoList">
            <li><h2>Welcome~</h2><h3>Stories between animals and people~</h3></li>
            <li><h2>We need help~</h2><h3>This is a sweet home~</h3></li>
            <li><h2>Thank you~</h2><h3>we need to build it together~</h3></li>
          </ul>
          
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="banner">
      
    </div>
    <div id="about" class="about">
      <div class="container">
        <div class="about-title"><h2>About Us</h2></div>
        <div class="about-img">
          <div class="col">
            <img src="img/cat.png" />
            <a href="pet-main.php"><div class="col-bottom" onmouseover="up(this)" onmouseout="down(this)">Pet Adoption</div></a>
          </div>
          
          <div class="col">
            <img src="img/col2.png" />
            <a href="staryPet-main.php"><div class="col-bottom" onmouseover="up(this)" onmouseout="down(this)">Stray Animals</div></a>
          </div>
          
          <div class="col">
            <img src="img/dog.png" />
            <a href="lostPet-main.php"><div class="col-bottom" onmouseover="up(this)" onmouseout="down(this)">Lost Pets</div></a>
          </div>
          
        </div>
      </div>
      
    </div>
  </div>
  
<script type="text/javascript" src="static/jquery1.42.min.js"></script>
<script type="text/javascript" src="static/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript">
 jQuery(".sli-inner").slide({mainCell:".infoList",autoPage:true,effect:"left",autoPlay:true,scroll:1,vis:1,trigger:"click"});
</script>
<script type="text/javascript" src="static/pageGroup.js"></script>
<script type="text/javascript">
jQuery(".cotinnerr").slide({mainCell:".contr-inner",autoPlay:true,effect:"topMarquee",vis:3,interTime:50});
</script> 
</body>
<footer>
  <p>All right received by WKU students</p>
</footer>
</html>