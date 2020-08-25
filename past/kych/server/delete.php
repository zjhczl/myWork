<?php
include "../includes/pdo.php";  
$rows = $GLOBALS['pdo']->query("select word from kych where id = ".$_POST['id']);
if($rows != null)
while ($row=$rows->fetch()) 
{
	$name = $row['word'];
}
$sql = "delete from kych where id = ".$_POST['id'];
$GLOBALS['pdo']->query($sql);
?>

<br>
<center><h1><?php echo($name."删除成功！！！");?></h1></center>
<br>
<SCRIPT language=javascript>
function go()
{
window.history.go(-1);
}
setTimeout("go()",800);
</SCRIPT>