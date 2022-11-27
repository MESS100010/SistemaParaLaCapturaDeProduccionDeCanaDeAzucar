<?php
include("conexion.php");
$con=conectar();

require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('../img/icono.png',10,8,33);
$pdf->SetFont('Arial','B',16);
$pdf->Ln('0.5'); //salto de linea
$pdf->Cell(220, 10, utf8_decode ("CAÑA DE AZÚCAR"), 0, 1, 'C');
$pdf->Ln('2'); //salto de linea
$pdf->Cell(220, 10, "Reporte del cultivo", 0, 1, 'C');

$id=$_POST['id'];

$sql = "SELECT * FROM cultivo WHERE idCultivo='$id'";
//$query = $mysqli->query($sql);

$resultado=mysqli_query($con,$sql);

while($row =mysqli_fetch_array($resultado)){
    $pdf->Cell(90, 10, "Id Cultivo:", 0, 1, 'C');
    $pdf->Cell(90, 10, $row['idCultivo'], 0, 1, 'C');
    $pdf->Cell(90, 10, "Fecha de inicio:", 0, 1, 'C');
    $pdf->Cell(90, 10, $row['FechaI'], 0, 1, 'C');
    $pdf->Cell(90, 10, "Fecha de cosecha:", 0, 1, 'C');
    $pdf->Cell(90, 10, $row['FechaC'], 0, 1, 'C');
    $pdf->Cell(90, 10, "Id Campo:", 0, 1, 'C');
    $pdf->Cell(90, 10, $row['idCampo'], 0, 1, 'C');
    $pdf->Cell(90, 10, "Notas:", 0, 1, 'C');
    $pdf->Cell(90, 10, utf8_decode($row['Notas']), 0, 1, 'C');
    $pdf->Cell(90, 10, "Progreso:", 0, 1, 'C');
    $pdf->Cell(90, 10, $row['Progreso'], 0, 1, 'C');
}

$pdf->Output();
    
?>