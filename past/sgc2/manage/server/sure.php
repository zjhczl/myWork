<?php
include "../../includes/pdo.php";  
$rows = $GLOBALS['pdo']->query("select 姓名 from sgc2 where id = ".$_POST['id']);
if($rows != null)
while ($row=$rows->fetch()) 
{
	$name = $row['姓名'];
}
$sql = "delete from sgc2 where id = ".$_POST['id'];
$GLOBALS['pdo']->query($sql);
?>
<br>
<center><h1><?php echo($name."删除成功！！！");?></h1></center>
<meta http-equiv="refresh" content="2;url=../delete.php">