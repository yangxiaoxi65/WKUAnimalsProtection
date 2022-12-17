<?php
require_once ("../include.php");
//家养宠物修改
$cate=$_POST['category'];
$place=$_POST['place'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$vacc=$_POST['vacc'];
$message=$_POST['message'];
$id=$_POST['id'];
$data=$_FILES['pet-modify']['tmp_name'];
$filename=$_FILES['pet-modify']['name'];

$destination="../uploads/".$filename;
if(move_uploaded_file($data, $destination)){
					$mes="Upload file successfully!";
				}else{
					$mes="Upload file failed!";
				}
$n="uploads/".$filename;
$sql="update home_pet set bin_data='$n',category='$cate',place='$place',sex='$sex',age='$age',vacc='$vacc',message='$message' where id =$id";
$result=mysqli_query($link, $sql);
if($result){
	echo "<script>alert('Modify information successfully!');window.location.href='../pet-main.php';</script>";
}else{
	echo "<script>alert('Modify information failed!');history.go(-1);</script>";
}