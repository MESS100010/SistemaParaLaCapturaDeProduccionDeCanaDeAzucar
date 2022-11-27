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
$pdf->Cell(220, 10, "Reporte del empleado en el cultivo", 0, 1, 'C');

$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(220, 10, "Datos generales del empleado", 0, 1, '');

$pdf->Ln('5'); //salto de linea

$pdf->SetFont('Arial','',12);

$id=$_POST['id'];

$sql = "SELECT * FROM empleado WHERE idEmpleado='$id'";
//$query = $mysqli->query($sql);

$resultado=mysqli_query($con,$sql);

while($row =mysqli_fetch_array($resultado)){
    $pdf->Cell(70, 10, "Id Empleado: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['idEmpleado'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Matricula: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Matricula'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Nombre: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Nom'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Apellido paterno: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Paterno'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Apellido materno: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Materno'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Sexo: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Sexo'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Fecha de nacimiento: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['FecNac'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Estado: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Edo'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Ciudad: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['City'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Calle: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Calle_'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, utf8_decode("Teléfono: "), 0, 1, '');
    $pdf->Cell(0, 0, $row['Tel'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Correo electronico: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Correo'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, utf8_decode("Código postal: "), 0, 1, '');
    $pdf->Cell(0, 0, $row['CP'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Puesto: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Puesto'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, "Salario: ", 0, 1, '');
    $pdf->Cell(0, 0, $row['Salario'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
    $pdf->Cell(70, 10, utf8_decode("Fecha de contratación: "), 0, 1, '');
    $pdf->Cell(0, 0, $row['Fec_Contrato'], 0, 1, '');
    $pdf->Ln('4'); //salto de linea
}

$pdf->Ln('6'); //salto de linea

$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(220, 10, "Cultivos en los que trabajo", 0, 1, '');

$sqlE = "SELECT * FROM Emp_Cult WHERE idEmpleado='$id'";
$resultadoE=mysqli_query($con,$sqlE);

$pdf->SetFont('Arial','',12);
$pdf->Ln('6'); //salto de linea

$pdf->Cell(0, 0, "Id insumo empleado:", 0, 1, 'L');
$pdf->Cell(0, 0, "Id cultivo:", 0, 1, 'C');
$pdf->Cell(0, 0, "Id Empleado:", 0, 1, 'R');

$pdf->Ln('15'); //salto de linea

while($row =mysqli_fetch_array($resultadoE)){
    
    $pdf->Cell(0, 0, $row['idEC'], 0, 1, 'L');
    $pdf->Cell(0, 0, $row['idCultivo'], 0, 1, 'C');
    $pdf->Cell(0, 0, $row['idEmpleado'], 0, 1, 'R');
    $pdf->Ln('10'); //salto de linea
}

$pdf->Output();
    
?>