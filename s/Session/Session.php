<?php
session_start();
//超全局变量
//$_SESSION['user'] = 'admin';
// $_SESSION['user'] = array(
// 	"username" => "admin",
// 	"age" => 12
// 	);

var_dump($_SESSION);

//session_unset();

//session指用户进入网站到关闭浏览器的时间间隔
//A用户和C服务器建立连接时所处的Session同B用户和C服务器建立连接时所处的Session是两个不同的Session。
//session存储在服务端。
//session可以解决http短连接问题

//cookie和session 是http协议的一个补充机制 可以实现会话控制  都可以标记用户\客户端，可以存储数据
// cookie将数据存储在客户端浏览器
// session将数据存储在服务端 Php临时目录
// cookie利用http协议直接传输会话数据
// session利用session id来定位会话数据
// cookie可以存储简单数据，比如字符串
// session可以存储复杂数据，比如数组、对象
// cookie保存的数据不能超过4k。