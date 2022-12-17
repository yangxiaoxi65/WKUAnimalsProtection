<?php
require_once '../include.php';
//删除请求领养的信息
$pid=$_GET['pid'];
$sql="delete from oncheck where pid= $pid";
if(mysqli_query($link, $sql)){
	echo "<script>alert('Success');window.location.href='../pet-main.php';</script>";
}else {
	echo "<script>alert('Fail!');window.location.href='../pet-main.php';</script>";
}