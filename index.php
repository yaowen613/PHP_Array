<?php
$bookinfo=array('PHP�������','��ҫ��','36Ԫ','�����ʵ������');
print_r($bookinfo);
?>

<?php 
$bookinfo[0]='PHP�������';
$bookinfo[1]='��ҫ��';
$bookinfo[2]='36Ԫ';
$bookinfo[3]='�����ʵ������';
echo 'ԭ�����е�ֵΪ��</br>';
echo $bookinfo[0].','.$bookinfo[1].','. $bookinfo[2].','.$bookinfo[3].'</br>';
$bookinfo[1]='WYW';
echo "�޸Ĳ��ֵ�����Ԫ�غ��ֵ��</br>";
echo $bookinfo[0].','.$bookinfo[1].','. $bookinfo[2].','.$bookinfo[3].'</br>';
?>