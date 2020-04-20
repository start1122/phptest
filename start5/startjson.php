<?php

$filename='3.txt';

$data=[
	['a','b','c'],	
	['d','e','f']
];

$data=json_encode($data);
file_put_contents($filename,$data);
$res=json_decode(file_get_contents($filename));

print_r($res);
//json格式输出 3.txt文件  与data对应的字符串