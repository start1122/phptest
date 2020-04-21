<?php

//  建立连接 mysqli_connect
$connection = mysqli_connect('127.0.0.1','root','Jy00449219');

//  判断连接是否成功 mysqli_connect_error
if (mysqli_connect_error() != null) {
	die(mysqli_connect_error());
} else {
	echo "连接成功";
}											var_dump($connection);
//  选择数据库  mysqli_select_db()

mysqli_select_db($connection,'start5_eastemper');

//  设置字符集  mysqli_set_charset()

mysqli_set_charset($connection,'utf8');

//  书写SQL语句  

$sql = "select * from `user2`";

//  执行sql语句  mysqli_query

$result = mysqli_query($connection,$sql);    var_dump($result); // 我的数据库 改良版 查询   【连接，数据库】

//  解析结果集  mysqli_fetch_array()   我的数据库改良版     取得   数组 mysqli_fetch_assoc()   mysqli_fetch_all()
//  MYSQLI_NUM
//  MYSQLI_ASSOC
//  MYSQLI_BOTH  解析形式

$array = mysqli_fetch_array($result, MYSQLI_BOTH);				var_dump($array);

//  关闭连接  mysqli_close($connection);

mysqli_close($connection);							var_dump($connection);

//mysqli连接操作数据库的方式，程序中间应该填上选择字符编码的代码：mysqli_set_charset(‘utf8’);
//mysqli连接操作数据库的方式获取结果集的函数，mysqli_query()是执行SQL语句的函数