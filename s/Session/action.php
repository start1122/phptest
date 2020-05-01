<?php

session_start();

$username = $_post['username'];
$password = $_post['password'];

$user = getUser();

if ($username != $user['username']){
	sendloginFailedResponse();
}
if ($password != $user['password']){
	sendloginFailedResponse();
}

$_SESSION['username'] = $username;
header("location:index.php");

function getUser()
{
	return array(
	"username"=> "imooc",
	"password"=> "123456"
	);
}

function sendloginFailedResponse(){
	$response ="<script>
	alert('用户名或密码错误!');
	window.loaction='login.php';
	</script>";
	echo $response;
	die;
}
/*
1. action.php中的username是从login.php中获取到的。如下所示：
实现逻辑：在login.php中点击登陆，
跳转到action.php页面并在action.php中判断login.php传入的username与password是否与getUser()方法中设置好的username与password相等，
如果相等，则代表登陆成功，登陆成功后设置 $_SESSION['username']并跳转到index.php中。
而index.php中的username就是action.php中设置 $_SESSION['username']。
如果不相等，则代表登陆失败，登陆失败则跳转到login.php文件。