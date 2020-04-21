<?php

// php mysql扩展  
$connection = mysql_connect('localhost','user','password');
// 执行sql语句
$result = mysql_query('show tables',$connection);
// 关闭连接
mysql_close($result)


<?php
//————————————php pdo驱动  仅提供了面向对象的接口——————————————————
// 建立连接
$connection = new pdo ('mysql:host=localhost;dbname=testdb','user'),
$result = $connection->query('show tables');
?>
// 无需显示关闭连接，PDO对象回收时会自动关闭连接

// pdo是个驱动drivers 几乎支持市面上所有主流的数据库

// php mysqli扩展  提供了面向过程和面向对象两种接口

//  面向过程
//  建立连接
$connection = mysqli_connect('localhost','user','password');
//  执行SQL语句
$result = mysqli_query($connection,'show tables');
//  关闭连接
mysqli_close($connection);

//——————————————————————————面向对象————————————————————————————
$mysqli = new mysqli('localhost','user','password');
//  执行sql语句
$result = $mysql->query('show tables');
//  关闭连接
$mysqli->close();

