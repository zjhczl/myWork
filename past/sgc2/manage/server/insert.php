<?php
function findNum($str=''){
$str=trim($str);
if(empty($str)){return '';}
$temp=array('1','2','3','4','5','6','7','8','9','0');
$result='';
for($i=0;$i<strlen($str);$i++){
if(in_array($str[$i],$temp)){
$result.=$str[$i];
}
}
return $result;
}

$a1=$_POST['a2'];
$a2=$_POST['a1'];
$a3=$_POST['a3'];
$a4=$_POST['a4'];
$a5=$_POST['a5'];
$a6=substr($a3, 6,8);
$a7=substr($a3, 6,4);
$a8=substr($a3, 10,2);
$a9=substr($a3, 12,2);
$a10=findNum($a4);

$sql = "INSERT INTO sgc2 (与户主关系,姓名, 身份证号码,户籍地址,性别,出生年月日,年,月,日,社) VALUES ('";
$sql = $sql.$a1."','";
$sql = $sql.$a2."','";
$sql = $sql.$a3."','";
$sql = $sql.$a4."','";
$sql = $sql.$a5."','";
$sql = $sql.$a6."','";
$sql = $sql.$a7."','";
$sql = $sql.$a8."','";
$sql = $sql.$a9."','";
$sql = $sql.$a10."')";
include "../../includes/pdo.php";  
$GLOBALS['pdo']->query($sql);
?>
<br>
<center><h1><?php echo($a2."添加成功！！！");?></h1></center>
<meta http-equiv="refresh" content="2;url=../add.php">