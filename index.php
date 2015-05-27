<?php
$bookinfo=array('PHP程序设计','王耀文','36元','人民邮电出版社');
print_r($bookinfo);
?>

<?php 
$bookinfo[0]='PHP程序设计';
$bookinfo[1]='王耀文';
$bookinfo[2]='36元';
$bookinfo[3]='人民邮电出版社';
echo '原数组中的值为：</br>';
echo $bookinfo[0].','.$bookinfo[1].','. $bookinfo[2].','.$bookinfo[3].'</br>';
$bookinfo[1]='WYW';
echo "修改部分的数组元素后的值：</br>";
echo $bookinfo[0].','.$bookinfo[1].','. $bookinfo[2].','.$bookinfo[3].'</br>';
?>