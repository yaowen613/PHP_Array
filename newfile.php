<?php
//使用for循环语句遍历索引数组
$bookinfo=array('PHP程序设计','王耀文','36元','人民邮电出版社');
for ($int_i=0;$int_i<count($bookinfo);$int_i++){
	echo $bookinfo[$int_i].'</br>';
}
//使用foreach语句遍历索引数组
foreach ($bookinfo as $value){
	echo $value.'</br>';
}
?>