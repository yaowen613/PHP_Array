<?php
$price=array(32.00,25.00,38.50);
echo '排序前结果：</br>';
//print_r($price);
foreach ($price as $value){
	echo $value.'</br>';
}
sort($price);
echo '排序后的结果：</br>';
foreach ($price as $value){
	echo $value.'</br>';
}