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
$sql = "SELECT salary,age,addr,username FROM user2 WHERE id>4";


//  执行sql语句

$result = mysqli_query($link, $sql);

//  解析sql语句执行结果

if ($result){
//	echo "执行成功！"
	echo "<pre>";
	// $data = mysqli_fetch_array($result);
	// // var_dump($data);
	// while ($row = mysqli_fetch_object($result)){
	// 	var_dump($row);}
	$data = mysqli_fetch_all($result,MYSQLI_NUM);
// array   row    object
var_dump($data);

//$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
//$data = mysqli_fetch_all($result,MYSQLI_NUM);
//$data = mysqli_fetch_all($result,MYSQLI_BOTH);

$fields = mysqli_num_fields($result);
echo "共查询到". $fields . " 列数据!";
// 4个字段

//if ($result){
	// echo "<pre>";
	// // $data = mysqli_fetch_array($result);
	// // var_dump($data);
	// while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
	// 	var_dump($row);
	// }
	
// if ($result){
// 	echo "<pre>";
// 	// $data = mysqli_fetch_array($result);
// 	// var_dump($data);
// 	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
// 		var_dump($row);
// 	}	

// if ($result){
// 	echo "<pre>";
// 	// $data = mysqli_fetch_array($result);
// 	// var_dump($data);
// 	while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
// 		var_dump($row);
// 	}
	
	
}else{
	echo "执行失败";
}

//  关闭连接，释放资源
mysqli_close($link);


//  准备  -  连接数据库、选择数据库、设置连接字符集
//  执行  -  书写并执行SQL语句
//  处理  -  获取并处理执行结果信息
//  结束  -  关闭数据库连接，释放资源

//  逐条解析数据
//  解析全部数据
//  获取数据行数
//  获取数据列数


<?php
//连接数据库
$link=mysqli_connect('localhost','root','root');

定义函数link 为常量  mysqli_connect函数 连接  数据库 帐号 密码

//判断是否连接成功
IF(mysqli_connect_error()!=null){
    echo '连接失败，失败原因'.mysqli_connect_error();
}else{
    echo '连接成功';
}

条件语句  当mysqli_connect_error 为空的情况下,连接失败和常量函数对应的信息 或输出连接成功

//选择数据库
mysqli_select_db($link,'test');
常量系统函数  选择link关联名字为test的数据库

//书写SQl语句
$sql="SELECT id,name,age FROM users";
定义函数sql为 选择id name age 从users表中

//执行sql语句
$res=mysqli_query($link,$sql);
定义函数res 为系统常量函数  从link数据库中查询 sql函数

//解析sql语句
while($row=mysqli_fetch_array($res)){
    var_dump($row);
}
当 row= 取得数组 res的时候   输出row


//关闭数据库连接
mysqli_close($link);
?>

