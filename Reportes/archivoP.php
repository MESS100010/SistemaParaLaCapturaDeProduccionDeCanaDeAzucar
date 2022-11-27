<?php
include("conexion.php");
$con=conectar();

require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('../img/icono.png',10,8,33);
$pdf->Ln('0.5'); //salto de linea

$pdf->SetFont('Arial','B',20);
$pdf->SetTextColor(82, 138, 43);
$pdf->Cell(220, 10, utf8_decode ("CAÑA DE AZÚCAR"), 0, 1, 'C');

$pdf->Ln('2'); //salto de linea

$pdf->SetFont('Arial','',16);
$pdf->SetTextColor(82, 120, 43);
$pdf->Cell(220, 10, "Reporte del producto en el cultivo", 0, 1, 'C');

$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(220, 10, "Datos generales del producto", 0, 1, '');

$pdf->Ln('5'); //salto de linea

$pdf->SetFont('Arial','',12);

$id=$_POST['id'];

$sql = "SELECT * FROM producto WHERE idProducto='$id'";
//$query = $mysqli->query($sql);

$resultado=mysqli_query($con,$sql);

while($row =mysqli_fetch_array($resultado)){
    $pdf->Cell(70, 10, "Id Producto: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['idProducto'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, utf8_decode("Código: "), 0, 1, '');
    $pdf->Cell(0, 0, $row['Codigo'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Categoria: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Categoria'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Consistencia: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Consistencia'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Peso en Kilogramos: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Peso_Kg'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Peso en Litros: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Peso_L'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Cantidad: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Cantidad'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Fecha de vigencia: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['FechaVigencia'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Precio unitario: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['PrecioUnitario'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Precio mayoreo: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['PrecioMayoreo'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Marca: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Marca'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
}

$pdf->Ln('6'); //salto de linea

$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(220, 10, "Cultivos en los que se utilizo", 0, 1, '');

$pdf->SetFont('Arial','',14);
$sqlP = "SELECT * FROM Prod_Cult WHERE idProducto='$id'";
$resultadoP=mysqli_query($con,$sqlP);

$pdf->SetFont('Arial','',12);
$pdf->Ln('6'); //salto de linea

$pdf->Cell(0, 0, "Id insumo producto:", 0, 1, 'L');
$pdf->Cell(0, 0, "Id cultivo:", 0, 1, 'C');
$pdf->Cell(0, 0, "Id Producto:", 0, 1, 'R');

$pdf->Ln('15'); //salto de linea

while($row =mysqli_fetch_array($resultadoP)){
    $pdf->Cell(0, 0, $row['idPC'], 0, 1, 'L');
    $pdf->Cell(0, 0, $row['idCultivo'], 0, 1, 'C');
    $pdf->Cell(0, 0, $row['idProducto'], 0, 1, 'R');
    $pdf->Ln('10'); //salto de linea
}

$pdf->Output();
    
?>