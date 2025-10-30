<?php

require('./fpdf.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      include "../backend_php/conexion.php";//llamamos a la conexion BD

      //$consulta_info = $conexion->query(" SELECT * FROM `inventario` ");//traemos datos de la empresa desde BD
      //$dato_info = $consulta_info->fetch_object();
      $this->Image('logo.png', 185, 5, 20); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(45); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode('Bolsos L&L'), 1, 0, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(10); //color

      /* UBICACION */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode(""), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(59, 10, utf8_decode(""), 0, 0, '', 0);
      $this->Ln(5);

      /* COREEO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode(""), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(110);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode(""), 0, 0, '', 0);
      $this->Ln(10);

            /* COREEO */
            $this->Cell(110);  // mover a la derecha
            $this->SetFont('Arial', 'B', 10);
            $this->Cell(85, 10, utf8_decode(""), 0, 0, '', 0);
            $this->Ln(5);

      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(1, 50, 32);
      $this->Cell(50); // mover a la derecha
      $this->SetFont('Arial', 'B', 20);
      $this->Cell(100, 1, utf8_decode("Inventario"), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(1, 50, 32); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(35, 10, utf8_decode('N°'), 1, 0, 'C', 1);
      $this->Cell(40, 10, utf8_decode('ID Bolso'), 1, 0, 'C', 1);
      $this->Cell(38, 10, utf8_decode('Cantidad'), 1, 0, 'C', 1);
      $this->Cell(40, 10, utf8_decode('Estado'), 1, 0, 'C', 1);
      $this->Cell(38, 10, utf8_decode('Ubicacion'), 1, 1, 'C', 1);
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

include '../backend_php/conexion.php';
//require '../../funciones/CortarCadena.php';
/* CONSULTA INFORMACION DEL HOSPEDAJE */
//$consulta_info = $conexion->query(" SELECT * FROM `inventario` ");
//$dato_info = $consulta_info->fetch_object();

$pdf = new PDF();
$pdf->AddPage(); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163); //colorBorde


$consulta_reporte = $conexion->query("SELECT * FROM `inventario`");

while ($datos_reporte = $consulta_reporte->fetch_object()) {      
   
$i = $i + 1;
/* TABLA */
$pdf->Cell(35, 10, utf8_decode($i), 1, 0, 'C', 0);
$pdf->Cell(40, 10, utf8_decode($datos_reporte->idBolso), 1, 0, 'C', 0);
$pdf->Cell(38, 10, utf8_decode($datos_reporte->cantidad), 1, 0, 'C', 0);
$pdf->Cell(40, 10, utf8_decode($datos_reporte->estadoBolso), 1, 0, 'C', 0);
$pdf->Cell(38, 10, utf8_decode($datos_reporte->idAlmacen), 1, 1, 'C', 0);
}



$pdf->Output('Prueba.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
