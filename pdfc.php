<?php
define('FPDF_FONTPATH', 'font/');
include '../../fpdf/fpdf.php';
include '../../include/connect.php';

//pesquisar na tabela

//$sql="SELECT * FROM produto ";

$sql="SELECT * FROM compra "; //exibe o registro específico
$busca = mysqli_query($con, $sql);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(140,10,('Relatorio de Lucros'),0,0,"C");
$pdf->ln(15); // espaçamento entra linhas de 15 mm


$pdf->SetFont('Arial','B',12);
$pdf->Cell(70, 7,'Nome do Cliente',1,0,"C");
$pdf->Cell(70, 7,'Preco',1,0,"C");
$pdf->ln(); //nenhum espaçamentos entre linhas


while ($resultado = mysqli_fetch_array($busca)) {

    
    $pdf->Cell(70, 7, $resultado['NOME_TITULAR'],1,0,"C");
    $pdf->Cell(70, 7, $resultado['TOTAL_PRECO'],1,0,"C");
    $pdf->Ln();
    
}
$pdf->Output();

include '../../logs/logr.php';
?>