<?php
//ʹ��forѭ����������������
$bookinfo=array('PHP�������','��ҫ��','36Ԫ','�����ʵ������');
for ($int_i=0;$int_i<count($bookinfo);$int_i++){
	echo $bookinfo[$int_i].'</br>';
}
//ʹ��foreach��������������
foreach ($bookinfo as $value){
	echo $value.'</br>';
}
?>