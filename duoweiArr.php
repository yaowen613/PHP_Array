<?php
$bookinfo=array(array('bookname'=>'PHP�������','author'=>'��ҫ��','price'=>63,'pubhouse'=>'�����ʵ������'),
		array('bookname'=>'ASP�������','author'=>'WYW','price'=>60,'pubhouse'=>'�ʵ������'),
		array('bookname'=>'JSP�������','author'=>'WYW0613','price'=>24,'pubhouse'=>'�ʵ����������'));
?>
<table border="1">
<tr><th>ͼ������</th><th>����</th><th>�۸�</th><th>������</th></tr>
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