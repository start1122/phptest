<?php

header('content-type:image/jpeg');

//fopen fread fgetc fgets fgetss fgetcsv

$filename="./start1.csv";  //定位文件名和文件位置

$filename="shouchika.jpeg";//图片文件读取

$string=file_get_contents($filename);// 用字符类型展示  =  文件提取自  上述文件名

echo $string;  //输出字符类型

//读取出全部内容

//echo strip_tags($string); //去掉标记

//file_put_contents($filename,$data): 向文件中写入内容  指令（文件名，写入内容）

//data是字符串格式  可以是string  array   或 stream资源

//如果不想覆盖之前的内容，可以先把文件中读取出来，接着再来写入

