<?php
require_once '../include.php';
//删除走失宠物
$id=$_GET['id'];
$sql="delete from lost_pet where id= $id";
if(mysqli_query($link, $sql)){
	$del="delete from lost_comment where pid=$id";
	mysqli_query($link, $del);
	echo "<script>alert('Delete Successfully!');window.location.href='../lostPet-main.php';</script>";
}else {
	echo "<script>alert('Delete Failed!');history.go(-1);</script>";
}
?>