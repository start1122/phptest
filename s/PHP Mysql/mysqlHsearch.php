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
//$sql ="select * from user2 where id < 12";
$sql ="SELECT * FROM user2 WHERE salary>=50000 AND age<35 AND age not in (34,33,32) GROUP BY age,id ORDER BY salary ASC ";
// limit 6筛选前6个
//
//  执行sql语句

$result = mysqli_query($link, $sql);

//  解析sql语句执行结果

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>姓名</th>";
echo "<th>年龄</th>";
echo "<th>性别</th>";
echo "<th>城市</th>";
echo "<th>婚姻</th>";
echo "<th>薪资</th>";

while ($row = mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td width='100px'>{$row['id']}</td>";
	echo "<td width='100px'>{$row['username']}</td>";
	echo "<td width='100px'>{$row['age']}</td>";
	echo "<td width='100px'>{$row['sex']}</td>";
	echo "<td width='100px'>{$row['addr']}</td>";
	echo "<td width='100px'>{$row['married']}</td>";
	echo "<td width='100px'>{$row['salary']}</td>";
}
echo "</table>";

//  关闭连接，释放资源
mysqli_close($link);



//  SQL语句语法错误
//  数据类型错误
//  唯一索引列数据重复
//  其他错误

//  判断SQL语句的执行结果
//  查看数据影响条数
//  获取SQL语句执行的错误信息



//  查错语句，不同的错误有不同的错误信息和错误代码 如1366为数据类型错误
//  echo"执行失败！  原因：" .mysqli_error($link) .",代码：" mysqli_errno($link);

//    连接数据库  判断连接结果  选择数据库  设置字符集   书写SQL语句  执行SQL语句  处理结果对象  关闭连接
//    使用上述执行添加、更新和删除SQL语句
//    使用mysqli_affected_rows()函数判影响的数据
//    使用mysqli_insert_id()函数获取插入数据的id
//    简单查询和复杂查询
//    逐条解析结果数据+循环
//    一次解析全部结果数据
//    判断SQL语句执行结果
//    获取SQL语句执行失败的原因
//    修正错误