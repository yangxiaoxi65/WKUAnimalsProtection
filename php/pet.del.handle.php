<?php
require_once '../include.php';
//删除家养宠物
$id=$_GET['id'];
$sql="delete from home_pet where id= $id";
if(mysqli_query($link, $sql)){
	$del="delete from comment where pid=$id";
	mysqli_query($link, $del);
	echo "<script>alert('Delete Successfully!');window.location.href='../pet-main.php';</script>";
}else {
	echo "<script>alert('Delete Failed!');history.go(-1);</script>";
}