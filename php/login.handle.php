<?php

require_once ("../connect.php");
session_start();
mysqli_query ( $link, 'set names utf8 ' );
//判断是否通过post传递登陆信息
if (isset ( $_POST ["submit"] ) && $_POST ["submit"] == "Log in") {
	$username = $_POST ['username'];
	$password = $_POST ['password'];
	echo $username;
	//判断输入的用户名和密码是否为空
	if ($username == "" || $password == "") {
		echo "<script>alert('The username and password cannot be empty!'); history.go(-1);</script>";
	} else {
//获取user表的信息，条件是用户名和密码无误。
			$sql = "select * from user where username = '$_POST[username]' and password = '$_POST[password]'";
			$result = mysqli_query ( $link, $sql );
			$num = mysqli_num_rows ( $result );
			$row=mysqli_fetch_assoc($result);
			$id=$row['id'];
			$_SESSION['uid']=$id;
//根据用户权限不同，登陆后进入不同页面。			
			$n="select username,policy from user where id='$id'";
			$rname=mysqli_query($link, $n);
			$name=mysqli_fetch_assoc($rname);
			$username=$name['username'];
			$_SESSION['username']=$username;
			$policy=$name['policy'];
			$_SESSION['policy']=$policy;
			if ($num) {
				
				if ($policy=='1'){
					echo "<script>alert('Login successfully!');window.location.href='../index.php'</script>";
				}else {
					echo "<script>alert('Login successfully!');window.location.href='../admin/admin.php'</script>";
				}
				
			} else {
				echo "<script>alert('Incorrect username or password!');history.go(-1);</script>";
			}
		} 
	}
 else {
	echo "<script>alert('Submission failed!'); history.go(-1);</script>";
}
?>