<?php

$filename='start1.csv';

$handle=fopen($filename,'rb+');

// $row=fgetcsv($handle);

// print_r($row);

// $row=fgetcsv($handle);

// print_r($row);

// $row=fgetcsv($handle);

// print_r($row);

// echo '<hr/>';

// $row=fgetcsv($handle);

// var_dump($row);
$rows=[];

while($row=fgetcsv($handle)){
	$rows[]=$row;
}

print_r($rows);