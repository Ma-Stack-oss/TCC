<?php
define('FPDF_FONTPATH', 'font/');
include 'fpdf/fpdf.php';
include 'conect.php';


$sql="SELECT * FROM customers ";
$busca = mysqli_query($con, $sql);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(140,10,('Relatorio de Usuarios'),0,0,"C");
$pdf->ln(15);


$pdf->SetFont('Arial','B',8);
$pdf->Cell(70, 7,'id',1,0,"C");
$pdf->Cell(70, 7,'Nome',1,0,"C");
$pdf->Cell(70, 7,'Email',1,0,"C");
$pdf->Cell(70, 7,'Senha',1,0,"C");
$pdf->ln();


while ($resultado = mysqli_fetch_array($busca)) {

    
    $pdf->Cell(70, 7, $resultado['id'],1,0,"C");
    $pdf->Cell(70, 7, $resultado['name'],1,0,"C");
    $pdf->Cell(70, 7, $resultado['email'],1,0,"C");
    $pdf->Cell(70, 7, $resultado['passwd'],1,0,"C");
    $pdf->Ln();
    
}
$pdf->Output();

include '../../logs/logr.php';
?>