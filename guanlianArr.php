<?php
$bookinfo=array('bookname'=>'PHP程序设计','author'=>'王耀文','price'=>63,'pubhouse'=>'人民邮电出版社');
//循环输出value的值
foreach ($bookinfo as $value){
	echo $value.'';
}
echo "</br>"."</br>";
//输出key值和value值
foreach ($bookinfo as $key=>$value){
	echo $key.":".$value."</br>";
}
?>