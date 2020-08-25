<?php
	require './chinese.php';
    require './function.php';

    try{
    	$pdo=new PDO('mysql:host=localhost;dbname=zj','root','');
        $pdo->query('set names utf8');
    }
    catch(PDOException $e)
    {
    	$out='连接不到sql服务器';
    	echo $out;
    	exit();
    }
    $rows = $pdo->query($_POST['sql']);

	$pdf = new PDF_Chinese();
    $pdf->AddGBFont('simhei', '黑体');
    $pdf->AddPage();
    $pdf->SetFont('simhei', '', 12);
    head($pdf);
    $i=1;
	if($rows != null)
		while ($row=$rows->fetch()) 
		{
			makeTable($pdf,$i,$row['姓名'],$row['与户主关系'],$row['身份证号码'],$row['户籍地址'],$row['性别'],$row['出生年月日']);
			$i++;
		}
    $pdf->Output('I');//直接输出，即在浏览器显示
    //$pdf->Output('example.pdf','F');//保存为example.pdf文件