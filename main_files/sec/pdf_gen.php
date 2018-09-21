<?php

function pdfgen($red,$name,$gname,$pdffile,$mode,$mobile)
{
require_once('../../tcpdf.php');
require_once('../../fpdi.php');
date_default_timezone_set('Asia/Kolkata');
ob_flush();

$redg="4116151040$red";
$docname="SEC_".$gname."_".$pdffile;
$pdf = new FPDI();
$pdf->SetTitle($docname);
$pdf->SetAuthor("www.cse19.netau.net");
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetFont('times', '', 11.5, '', true);
$pdf->SetDisplayMode('fullpage', 'SinglePage', 'UseNone');
$pageCount=$pdf->setSourceFile($pdffile);


for($i=1;$i<=$pageCount;$i++)
{
    
    $pdf->AddPage('P', 'A4');
    $pdf->SetFont('times', 'B', 11);
    $pageCount = $pdf->setSourceFile($pdffile);
    $pdf->Cell(28+2.3*strlen($name), 17, $name, 0, 0,'C');
   $pdf->SetFont('times', 'B', 12);
    $pdf->Cell(283-4.4*strlen($name), 17, $redg, 0, 0,'C');
    $tplIdx = $pdf->importPage($i, '/MediaBox');
    $pdf->useTemplate($tplIdx, 2.8, 2, 206, 291);
}

if($mobile==0) {
$pdf->Output($docname, $mode);

//sendWay2SMS('7811931363','9789835114','9094143058',$gname.'  has downloaded CG LAB  file: '.$pdffile.'  via System On '.date('l, M d-y h:i:s a')); 
}


else
{
    
 $path=getcwd();
ob_flush();
$pdf->Output($path."/temp/".$docname,'F');
ob_flush();
header("Location:temp/"."$docname");
 

//sendWay2SMS('7811931363','9789835114','9094143058',$gname.'  has downloaded CG LAB  file: '.$pdffile.'  via Mobile On '.date('l, M d-y h:i:s a')); 
}

}

?>