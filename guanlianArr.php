<?php
$bookinfo=array('bookname'=>'PHP�������','author'=>'��ҫ��','price'=>63,'pubhouse'=>'�����ʵ������');
//ѭ�����value��ֵ
foreach ($bookinfo as $value){
	echo $value.'';
}
echo "</br>"."</br>";
//���keyֵ��valueֵ
foreach ($bookinfo as $key=>$value){
	echo $key.":".$value."</br>";
}
?>