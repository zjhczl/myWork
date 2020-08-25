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
include "./server/adress.php";
?>
<br>
<div class="row">
<form action="./adress.php" method="post">
	<div class="col-sm-1"></div>
	<div class="col-sm-3">
	<?php 
	echo '<label>开始年月日:<input type="text" name="time1" value="'.$_POST['time1'].'"></label>';
	echo '<label>结束年月日:<input type="text" name="time2" value="'.$_POST['time2'].'"></label>';
	 ?>
	</div>
	<div class="col-sm-2">
                <select class="form-control" name="she">
                    <option value="0" <?php echo $selected[0]; ?> >全部</option>
                    <option value="1" <?php echo $selected[1]; ?> >1社</option>
                    <option value="2" <?php echo $selected[2]; ?> >2社</option> 
                    <option value="3" <?php echo $selected[3]; ?> >3社</option>
                    <option value="4" <?php echo $selected[4]; ?> >4社</option>
                    <option value="5" <?php echo $selected[5]; ?> >5社</option>
                    <option value="6" <?php echo $selected[6]; ?> >6社</option>
                </select>
            </div>
            <div class="col-sm-2">
                <select class="form-control" name="relation">
                    <option value="0" <?php echo $selected2[0]; ?> >全部</option>
                    <option value="1" <?php echo $selected2[1]; ?> >户主</option>
                    <option value="2" <?php echo $selected2[2]; ?> >妻</option> 
                    <option value="3" <?php echo $selected2[3]; ?> >女</option>
                    <option value="4" <?php echo $selected2[4]; ?> >子</option>
                    <option value="5" <?php echo $selected2[5]; ?> >母亲</option>
                    <option value="6" <?php echo $selected2[6]; ?> >儿媳</option>
                </select>
            </div>


            <div class="col-sm-3">
            &ensp;&ensp;
                <label class="radio-inline">
                    <input type="radio" name="sex" id="inlineRadio1" value="0" <?php echo $checked[0]; ?> > 全部&ensp;
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sex" id="inlineRadio2" value="男"<?php echo $checked[1]; ?> > 男&ensp;
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sex" id="inlineRadio3" value="女"<?php echo $checked[2]; ?> > 女
                </label>
            </div>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            <hd>
            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-3"><input type="submit" class="btn btn-primary" value="查询"></div>
            </div>
	
</form>
</div>
<br>
<form action="./fpdf/example.php" method="post">
    <?php

    echo '<input type="hidden" name="sql" value="'.$sql.'">';

    ?>
    <div class="row">
        <div class="col-sm-12">
            <center><input type="submit" class="btn btn-primary" value="下载打印文件"></center>
        </div>       
    </div>
    
</form>
<hr>
<div class="row">
	<div class="col-sm-1"></div>
<div class="col-sm-10">
<table class="table table-bordered">
	<tr>
		<th>编号</th>
		<th>姓名</th>
        <th>与户主关系</th>
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
echo "<td>".$row['与户主关系']."</td>";
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