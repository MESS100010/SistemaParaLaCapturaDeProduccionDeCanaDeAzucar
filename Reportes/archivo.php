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
$pdf->Cell(220, 10, "Reporte del cultivo", 0, 1, 'C');

$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(220, 10, "Datos generales del cultivo", 0, 1, '');

$pdf->Ln('5'); //salto de linea

$pdf->SetFont('Arial','',12);

$id=$_POST['id'];

$sql = "SELECT * FROM cultivo WHERE idCultivo='$id'";
//$query = $mysqli->query($sql);

$resultado=mysqli_query($con,$sql);

while($row =mysqli_fetch_array($resultado)){
    $pdf->Cell(70, 10, "Id Cultivo: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['idCultivo'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Fecha de inicio:", 0, 1, '');
    $pdf->Cell(0, 0, $row['FechaI'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Fecha de cosecha:", 0, 1, '');
    $pdf->Cell(0, 0, $row['FechaC'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Id Campo:", 0, 1, '');
    $pdf->Cell(0, 0, $row['idCampo'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Notas:", 0, 1, '');
    $pdf->Cell(0, 0, utf8_decode($row['Notas']), 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Progreso:", 0, 1, '');
    $pdf->Cell(0, 10, $row['Progreso'], 0, 1, '');
}

$pdf->Ln('6'); //salto de linea

$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(220, 10, "Insumos del cultivo", 0, 1, '');

$pdf->SetFont('Arial','',14);
$pdf->Cell(90, 10, "Empleados", 0, 1, '');
$sqlE = "SELECT * FROM Emp_Cult WHERE idCultivo='$id'";
$resultadoE=mysqli_query($con,$sqlE);

$pdf->SetFont('Arial','',12);
$pdf->Ln('6'); //salto de linea

$pdf->Cell(0, 0, "Id insumo empleado:", 0, 1, 'R');
$pdf->Cell(0, 0, "Id cultivo:", 0, 1, 'C');
$pdf->Cell(0, 0, "Id Empleado:", 0, 1, 'L');

$pdf->Ln('15'); //salto de linea

while($row =mysqli_fetch_array($resultadoE)){
    
    $pdf->Cell(0, 0, $row['idEC'], 0, 1, 'R');
    $pdf->Cell(0, 0, $row['idCultivo'], 0, 1, 'C');
    $pdf->Cell(0, 0, $row['idEmpleado'], 0, 1, 'L');
    $pdf->Ln('10'); //salto de linea
}

$pdf->SetFont('Arial','',14);
$pdf->Cell(90, 10, "Productos", 0, 1, '');
$sqlP = "SELECT * FROM Prod_Cult WHERE idCultivo='$id'";
$resultadoP=mysqli_query($con,$sqlP);

$pdf->SetFont('Arial','',12);
$pdf->Ln('6'); //salto de linea

$pdf->Cell(0, 0, "Id insumo producto:", 0, 1, 'R');
$pdf->Cell(0, 0, "Id cultivo:", 0, 1, 'C');
$pdf->Cell(0, 0, "Id Producto:", 0, 1, 'L');

$pdf->Ln('15'); //salto de linea

while($row =mysqli_fetch_array($resultadoP)){
    $pdf->Cell(0, 0, $row['idPC'], 0, 1, 'R');
    $pdf->Cell(0, 0, $row['idCultivo'], 0, 1, 'C');
    $pdf->Cell(0, 0, $row['idProducto'], 0, 1, 'L');
    $pdf->Ln('10'); //salto de linea
}

$pdf->SetFont('Arial','',14);
$pdf->Cell(90, 10, "Actividades", 0, 1, '');
$sqlA = "SELECT * FROM Act_Cult WHERE idCultivo='$id'";
$resultadoA=mysqli_query($con,$sqlA);

$pdf->SetFont('Arial','',12);
$pdf->Ln('6'); //salto de linea

$pdf->Cell(0, 0, "Id insumo actividad:", 0, 1, 'R');
$pdf->Cell(0, 0, "Id cultivo:", 0, 1, 'C');
$pdf->Cell(0, 0, "Id Actividad:", 0, 1, 'L');

$pdf->Ln('15'); //salto de linea

while($row =mysqli_fetch_array($resultadoA)){
    $pdf->Cell(0, 0, $row['idAC'], 0, 1, 'R');
    $pdf->Cell(0, 0, $row['idCultivo'], 0, 1, 'C');
    $pdf->Cell(0, 0, $row['idActividad'], 0, 1, 'L');
    $pdf->Ln('10'); //salto de linea
}

$pdf->SetFont('Arial','',14);
$pdf->Cell(90, 10, "Usuarios", 0, 1, '');
$sqlU = "SELECT * FROM Usuario_Cult WHERE idCultivo='$id'";
$resultadoU=mysqli_query($con,$sqlU);

$pdf->SetFont('Arial','',12);
$pdf->Ln('6'); //salto de linea

$pdf->Cell(0, 0, "Id insumo usuario:", 0, 1, 'R');
$pdf->Cell(0, 0, "Id cultivo:", 0, 1, 'C');
$pdf->Cell(0, 0, "Id Usuario:", 0, 1, 'L');

$pdf->Ln('15'); //salto de linea

while($row =mysqli_fetch_array($resultadoU)){
    $pdf->Cell(0, 0, $row['idUC'], 0, 1, 'R');
    $pdf->Cell(0, 0, $row['idCultivo'], 0, 1, 'C');
    $pdf->Cell(0, 0, $row['idUsuario'], 0, 1, 'L');
    $pdf->Ln('10'); //salto de linea
}

$pdf->Output();
    
?>