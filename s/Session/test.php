<?php
$result = setcookie("username","test",time()+3600);

if ($result) {
	echo "设置成功!";
	}else{
		echo "设置失败!";
	}
//setcookie()函数定义了cookie 会和剩下的HTTP头一起发送给客户端。和其他HTTP头一样
//必须在脚本产生任意输出之前发送Cookie（由于协议的限制）。
//请在产生任何输出之前（包括<html>和<head>或者空格）调用本函数。
	
//设置 cookie
setcookie("username","admin");
//读取 cookie
$_COOKIE["username"];

//setcookie函数，BC选项是正确的，AD选项是错误的。
//setcookie(‘imooc’,123,time()+3600,’/’);添加名称为imooc的cookie
//setcookie(‘imooc’,null,time()-1,’/’);删除名称为imooc的cookie