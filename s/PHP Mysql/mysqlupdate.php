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
$sql = "UPDATE user SET password = 'password' WHERE id > 4";


//  执行sql语句

$result = mysqli_query($link, $sql);

//  解析sql语句执行结果

if ($result){
	echo "执行成功！成功更新了  ".mysqli_affected_rows($link)." 条数据！";
}else{
	echo "执行失败";
}

//  关闭连接，释放资源
mysqli_close($link);