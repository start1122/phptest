<?php

// 连接数据库
$link = mysqli_connect('127.0.0.1','root','Jy00449219');

// 判断连接是否成功

if (mysqli_connect_error() != null) {
	die("连接失败!原因:". mysqli_connect_error());
}

//  选择数据库
mysqli_select_db($link,'start5_eastemper');

//  设置连接字符集
mysqli_set_charset($link,'utf8');

//  书写sql语句
$sql = "INSERT INTO user(username, password) values('测试用户5','password5'),('测试用户6','password6'),('测试用户7','password7'),('测试用户8','password8')";

//  执行sql语句

$result = mysqli_query($link, $sql);

//  解析sql语句执行结果

if ($result){
	echo "执行成功! 成功插入了".mysqli_affected_rows($link)."条数据!刚才插入的数据的ID是".mysqli_insert_id($link);
}else{
	echo "执行失败";
}

//  关闭连接，释放资源
mysqli_close($link);