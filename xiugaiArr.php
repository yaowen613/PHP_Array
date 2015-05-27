<?php
echo '<pre>';
$arr=array('0'=>'I','1'=>'Love','2'=>'you');//使用array创建数组
$arr[]="?";//添加新元素，键为3；
$arr[9]="!";//添加新元素，键为9；
//echo "添加两个元素后的$arr:".$arr;
echo '添加两个元素后的$arr:'."</br>";
print_r($arr);
$arr[0]='You';//修改键为0的值为'You'；
$arr[2]='I';//修改键为2的值为'I'；
unset($arr[3]);
//echo "修改后的$arr:";
echo '修改后的$arr:'.'</br>';
print_r($arr);
unset($arr);
echo '</pre>';
