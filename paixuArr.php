<?php
$price=array(32.00,25.00,38.50);
echo '����ǰ�����</br>';
//print_r($price);
foreach ($price as $value){
	echo $value.'</br>';
}
sort($price);
echo '�����Ľ����</br>';
foreach ($price as $value){
	echo $value.'</br>';
}