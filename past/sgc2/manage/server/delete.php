<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="..\..\bootstrap\css\bootstrap.css">
<title>人口信息删除</title>
</head>
<body>
<br>
<center><h1>双桂村人口信息删除</h1></center>
<br>
<hr>
<table class="table table-bordered">
	<tr>
		<th>姓名</th>
        <th>与户主关系</th>
		<th>身份证号码</th>
		<th>住址</th>		
		<th>性别</th>
		<th>出生日期</th>
	</tr>
<?php
include "../../includes/pdo.php";  
$sql = "select * from sgc2 where id = ".$_POST['id'];
$rows = $GLOBALS['pdo']->query($sql);
if($rows != null)
{
	while ($row=$rows->fetch()) 
{
echo "<tr>";
echo "<td>".$row['姓名']."</td>";
echo "<td>".$row['与户主关系']."</td>";
echo "<td>".$row['身份证号码']."</td>";
echo "<td>".$row['户籍地址']."</td>";
echo "<td>".$row['性别']."</td>";
echo "<td>".$row['出生年月日']."</td>";
echo "</tr>";
}
}
?>
</table>
<br>
<center><h3>是否确认删除？</h3></center>
<form action="./sure.php" method="post">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-3">
			<?php echo '<input type="hidden" name="id" value="'.$_POST['id'].'">'; ?>
			<input type="submit" class="btn btn-danger" value="删除">
		</div>
		<div class="col-sm-3">
			<a href="../delete.php"><button type="button" class="btn btn-success">取消</button></a>
		</div>
	</div>
</form>
</body>