<?php
function zj_query()
{
	$sql = 'select * from sgc2';
$zj = $GLOBALS['pdo']->query($sql);
return $zj;
// while ($row=$zj->fetch()) 
//         {
//          echo $row['姓名'];
//         }
}