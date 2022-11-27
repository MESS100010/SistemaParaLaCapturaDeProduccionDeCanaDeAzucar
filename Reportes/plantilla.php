<?php
    require 'fpdf.php';

    class PDF extends fpdf{
        function Header(){
            $this->Image('../img/icono.png',5,5,30);
            $this->SetFont('Arial','B',15);
            $this->Cell(120,10,'Reporte del cultivo',0,0,'C');

            $this->Ln(20);
        }
    }
?>