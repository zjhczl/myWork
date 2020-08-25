<?php
if(isset($_POST['year']))
{
if ($_POST['year']!=null)
{
	$zj=$_POST['year'];
	$sql = 'select * from sgc2 where 年 like "%'.$zj.'%"';
	$rows = $GLOBALS['pdo']->query($sql);
}
else 
{
	$rows =null;
}
}
else {
	$_POST['year'] = 1990;
	$zj=$_POST['year'];
	$sql = 'select * from sgc2 where 年 like "%'.$zj.'%"';
	$rows = $GLOBALS['pdo']->query($sql);
}

