<?php
require_once ("../include.php");
//将评论信息放入数据库
$pid=$_POST['pid'];
$uid=$_POST['uid'];
$username=$_POST['username'];
$message=$_POST['message'];

$sql="insert into lost_comment values($pid,$uid,'$username','$message')";
$result=mysqli_query($link, $sql);
if($result){
	echo "<script>alert('Comment Successfully!');history.go(-1)</script>";
}