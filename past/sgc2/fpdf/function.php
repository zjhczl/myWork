<?php
function zjCell(FPDF $pdf,$s,$l)
{
    $pdf->Cell($l,7,iconv("utf-8","gbk",$s),1);
}
function head(FPDF $pdf)
{
    $l = 19;
    $w = 6;
    $pdf->SetFont('simhei', '', 14);
    $pdf->Cell(19/2,7*1,iconv("utf-8","gbk","                                                                       双桂村选民登记册"),0);
    $pdf->SetFont('simhei', '', 10);
    $pdf->Ln();
    $pdf->Cell(19/2,7*1,iconv("utf-8","gbk","                         年		月		日	"),0);
    $pdf->Ln();
    zjCell($pdf,"编号",13);
    zjCell($pdf,"姓名",15);
    zjCell($pdf,"与户主关系",19);
    zjCell($pdf,"身份证号码",33);
    zjCell($pdf,"住址",80);
    zjCell($pdf,"性别",10);
    zjCell($pdf,"出生日期",18);
    $pdf->Ln();
    
    	 
}

function makeTable(FPDF $pdf,$A1,$A2,$A3,$A4,$A5,$A6,$A7)
{
    zjCell($pdf,$A1,13);
    zjCell($pdf,$A2,15);
    zjCell($pdf,$A3,19);
    zjCell($pdf,$A4,33);
    zjCell($pdf,$A5,80);
    zjCell($pdf,$A6,10);
    zjCell($pdf,$A7,18);
    $pdf->Ln();	
}
