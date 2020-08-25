<?php
$checked=array(null,null,null);
if (!isset($_POST['sex']))
	{
		$_POST['sex']=null;
	}

	if (!$_POST['sex']) 
	{
		$checked[0]='checked';
	}
	if ($_POST['sex']=='男') 
	{
		$checked[1]='checked';
	}
	

if(isset($_POST['year']))
{
if ($_POST['year']!=null)
{
	$zj=$_POST['year'];
	if ($_POST['sex']=='男') {
		$sql = 'select * from kycd where mean like "%'.$zj.'%"';
	}
	else{
		$sql = 'select * from kycd where word like "%'.$zj.'%"';
		}
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





