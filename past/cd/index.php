<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href=".\bootstrap\css\bootstrap.css">
<title>考研核心词汇词典</title>
</head>
<body>
<center><h1>考研核心词汇词典</h1></center>
<?php 
include "./includes/pdo.php";  
include "./server/she.php";
?>
<br>
<div class="row">
<div class="col-sm-4"></div>
<form action="./index.php" method="post">
	<div class="col-sm-2">
	<label class="radio-inline">
    	<input type="radio" name="sex" id="inlineRadio1" value="0" <?php echo $checked[0]; ?> > 英文&ensp;
    </label>
    <label class="radio-inline">
    	<input type="radio" name="sex" id="inlineRadio2" value="男"<?php echo $checked[1]; ?> > 中文&ensp;
    </label>
    </div>
	<div class="col-sm-2">
	<?php 
	echo '<input type="input" class="form-control" name="year" value="'.$_POST['year'].'">';
	 ?>
	</div>
	
    <div class="col-sm-3">
	<input class="btn btn-info" type="submit" value="确定">
	</div>
</form>
</div>
<br>
<div class="row">
	<div class="col-sm-1"></div>
<div class="col-sm-10">
<table class="table table-bordered">
	<tr>
		<th>编号</th>
		<th>单词</th>
		<th>意思</th>
	</tr>
<?php
$i=1;
if($rows != null)
while ($row=$rows->fetch()) 
{
echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['word']."</td>";
echo "<td>".$row['mean']."</td>";
echo "</tr>";
$i++;
}
?>
</div>
</table>
</div>
</body>
</html>