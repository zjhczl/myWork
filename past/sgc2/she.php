<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href=".\bootstrap\css\bootstrap.css">
<title>人口信息查询</title>
</head>
<body>
<center><h1>双桂村人口信息查询2019</h1></center>
<?php 
include "./includes/pdo.php";  
include "./server/she.php";
?>
<br>
<div class="row">
<div class="col-sm-4"></div>
<form action="./she.php" method="post">
	<div class="col-sm-1">姓名：</div>
	<?php 
	echo '<input type="input" name="year" value="'.$_POST['year'].'">';
	 ?>
	<input type="submit" value="确定">
</form>
</div>
<br>
<div class="row">
	<div class="col-sm-1"></div>
<div class="col-sm-10">
<table class="table table-bordered">
	<tr>
		<th>编号</th>
		<th>姓名</th>
		<th>身份证号码</th>
		<th>住址</th>
		<th>性别</th>
		<th>出生日期</th>
	</tr>
<?php
$i=1;
if($rows != null)
while ($row=$rows->fetch()) 
{
echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['姓名']."</td>";
echo "<td>".$row['身份证号码']."</td>";
echo "<td>".$row['户籍地址']."</td>";
echo "<td>".$row['性别']."</td>";
echo "<td>".$row['出生年月日']."</td>";
echo "</tr>";
$i++;
}
?>
</div>
</table>
</div>
</body>
</html>