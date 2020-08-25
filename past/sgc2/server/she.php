<?php
if(isset($_POST['year']))
{
if ($_POST['year']!=null)
{
	$zj=$_POST['year'];
	$sql = 'select * from sgc2 where 姓名 like "%'.$zj.'%"';
	$rows = $GLOBALS['pdo']->query($sql);
}
else 
{
	$_POST['year']=null;
	$rows = null;
}
}
else {
	$_POST['year']=null;
	$rows = null;
}

