<?php
$sql="select * from sgc2 ";
if (!isset($_POST['time1']))
{
	$_POST['time1']=null;
}
if($_POST['time1']!=null)
{
	if (strlen($_POST['time1'])!=8) {
		$sql=$sql."and 与户主关系 ='输入错误'".' ';
	}
	$sql=$sql."where 出生年月日>=".date('Ymd',strtotime($_POST['time1'])).' ';
}
else
{
	$sql=$sql."where 出生年月日 like '%%'".' ';
}

if (!isset($_POST['time2']))
{
	$_POST['time2']=null;
}

if ($_POST['time2']!=null) 
{
	if (strlen($_POST['time2'])!=8) {
		$sql=$sql."and 与户主关系 ='输入错误'".' ';
	}
	$sql=$sql."and 出生年月日<=".date('Ymd',strtotime($_POST['time2'])).' ';
}

if (!isset($_POST['she']))
{
	$_POST['she']=0;
}
if ($_POST['she']!=0) 
{
	$sql=$sql."and 社 ='".$_POST['she']."'".' ';
}

if (!isset($_POST['relation']))
{
	$_POST['relation']=0;
}
if ($_POST['relation']!=0) 
{
	//$sql=$sql."and 社 ='".$_POST['relation']."社'".' ';
	if ($_POST['relation']==1) {
		$sql=$sql."and 与户主关系 ='户主'".' ';
	}
	if ($_POST['relation']==2) {
		$sql=$sql."and 与户主关系 ='妻'".' ';
	}
	if ($_POST['relation']==3) {
		$sql=$sql."and 与户主关系 like '%女'".' ';
	}
	if ($_POST['relation']==4) {
		$sql=$sql."and 与户主关系 like '%子'".' ';
	}
	if ($_POST['relation']==5) {
		$sql=$sql."and 与户主关系 ='母亲'".' ';
	}
	if ($_POST['relation']==6) {
		$sql=$sql."and 与户主关系 ='儿媳'".' ';
	}

}

if (!isset($_POST['sex']))
{
	$_POST['sex']=null;
}

if ($_POST['sex']) 
{
	$sql=$sql."and 性别 ='".$_POST['sex']."' ";
}
$rows = $GLOBALS['pdo']->query($sql);

$selected=array(null,null,null,null,null,null,null);
$selected[$_POST['she']]="selected";

$selected2=array(null,null,null,null,null,null,null);
$selected2[$_POST['relation']]="selected";

$checked=array(null,null,null);

if (!$_POST['sex']) 
{
	$checked[0]='checked';
}
if ($_POST['sex']=='男') 
{
	$checked[1]='checked';
}
if ($_POST['sex']=='女') 
{
	$checked[2]='checked';
}

