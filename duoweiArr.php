<?php
$bookinfo=array(array('bookname'=>'PHP程序设计','author'=>'王耀文','price'=>63,'pubhouse'=>'人民邮电出版社'),
		array('bookname'=>'ASP程序设计','author'=>'WYW','price'=>60,'pubhouse'=>'邮电出版社'),
		array('bookname'=>'JSP程序设计','author'=>'WYW0613','price'=>24,'pubhouse'=>'邮电人民出版社'));
?>
<table border="1">
<tr><th>图书名称</th><th>作者</th><th>价格</th><th>出版社</th></tr>
<?php 
foreach ($bookinfo as $bookarray){
echo "<tr>";
foreach ($bookarray as $value){
echo "<td>";
echo $value;
echo "</td>";
}
echo "</tr>";
}
?>
</table>