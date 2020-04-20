<?php

$filename='./start1.txt';

$handle=fopen($filename,'r');

// var_dump($handle);

// $res=fread($handle,3);   读取3个指针位置的内容
// echo $res,'<br>';

// $res=fread($handle,3);   再读取3个指针位置的内容
// echo $res;

//fread() 读取文件内容
//fopen() 打开指定文件，以指定的方式来打开

// $res=fread($handle,filesize($filename));
// echo $res;

echo ftell($handle),'<br/>';//输出指针当前的位置  正常为0
fread($handle,3);//移动指针3位

echo ftell($handle),'<br/>';//输出指针当前位置  目前为3
fread($handle,filesize($filename));//移动到文件尾
echo ftell($handle);//输出当前指针位置19

echo '<hr/>';