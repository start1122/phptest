<?php

$filename='start5.csv';
$handle=fopen($filename,'wb+');

//针对filename


// $data=[
// 	[1,'php','php是最好学的语言'],
// 	[2,'javascript','javascript是必须要掌握的语言'],
// 	[3,'meteor','meteor anywhere']
	
// ];

// foreach ($data as $val){
// 	fputcsv($handle,$val);
// }

$data=[
	['id'=>1,'courseName'=>'ios','courseDesc'=>'this is ios'],
		['id'=>2,'courseName'=>'android','courseDesc'=>'this is andriod'],
			['id'=>3,'courseName'=>'swift','courseDesc'=>'this is swift'],
	];
	
	foreach ($data as $val)
	{
		fputcsv($handle,$val,'-');
	}

fclose($handle);   //put在已有文件阶段会覆盖，没有的情况下会新建