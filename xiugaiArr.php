<?php
echo '<pre>';
$arr=array('0'=>'I','1'=>'Love','2'=>'you');//ʹ��array��������
$arr[]="?";//�����Ԫ�أ���Ϊ3��
$arr[9]="!";//�����Ԫ�أ���Ϊ9��
//echo "�������Ԫ�غ��$arr:".$arr;
echo '�������Ԫ�غ��$arr:'."</br>";
print_r($arr);
$arr[0]='You';//�޸ļ�Ϊ0��ֵΪ'You'��
$arr[2]='I';//�޸ļ�Ϊ2��ֵΪ'I'��
unset($arr[3]);
//echo "�޸ĺ��$arr:";
echo '�޸ĺ��$arr:'.'</br>';
print_r($arr);
unset($arr);
echo '</pre>';
