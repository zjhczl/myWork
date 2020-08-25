<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="..\bootstrap\css\bootstrap.css">
<title>人口信息删除</title>
</head>
<body>
<br>
<center><h1>双桂村人口信息添加</h1></center>
<br>
<hr>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-8">
<form action="./server/insert.php" method="post">
<table class="table table-bordered">
	<tr>
		<th>姓名</th>
        <th>与户主关系</th>
		<th>身份证号码</th>
		<th>住址</th>		
		<th>性别</th>
	</tr>
	<tr>
		<th><input type="text" name="a1"></th>
        <th><input type="text" name="a2"></th>
		<th><input type="text" name="a3"></th>
		<th><input type="text" name="a4"></th>		
		<th><input type="text" name="a5"></th>
	</tr>
</table>
</div>
</div>
<center><input type="submit" class="btn btn-danger" value="添加"></center>
</form>
</body>