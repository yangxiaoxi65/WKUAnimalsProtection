<?php
require_once '../include.php';
//删除
$id=$_GET['id'];
$sql1="delete from comment where id= $id";
if(mysqli_query($link, $sql1)){
	
	echo "<script>alert('Delete' Successfully!);history.go(-1);</script>";
}else {
	echo "<script>alert('Delete Failed!');history.go(-1);</script>";
}
?>