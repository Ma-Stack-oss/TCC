   
<?php
define('FPDF_FONTPATH', 'font/');
include 'fpdf/fpdf.php';
include 'conect.php';

$sql="SELECT * FROM orders ";
$busca = mysqli_query($con, $sql);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(140,10,('Todos Os Servicos:'),0,0,"C");
$pdf->ln(15);


$pdf->SetFont('Arial','B',12);
$pdf->Cell(70, 7,'Orcamento',1,0,"C");
$pdf->Cell(70, 7,'Preco',1,0,"C");
$pdf->Cell(70, 7,'ID_Responsavel',1,0,"C");
$pdf->ln();


while ($resultado = mysqli_fetch_array($busca)) {

    
    $pdf->Cell(70, 7, $resultado['description'],1,0,"C");
    $pdf->Cell(70, 7, $resultado['amount'],1,0,"C");
    $pdf->Cell(70, 7, $resultado['customer_id'],1,0,"C");
    $pdf->Ln();
    
}
$pdf->Output();

?>