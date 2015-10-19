<?php
include "conn.php";
require('fpdf17/fpdf.php');

//Menampilkan data dari tabel di database

$result=mysql_query("select * from pinjam where pinjam_status='1'") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_no = "";
$column_pinjam = "";
$column_kembali = "";
$column_nis = "";


$no=1;
//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{    
    $nomor=$no++;
	$pinjam = $row["tgl_pinjam"];    //1
    $kembali = $row["tgl_kembali"];   //2
    $nis = $row["anggota_nis"];  //3
    
   
    
    

	$column_no = $column_no.$nomor."\n";   //1
    $column_pinjam = $column_pinjam.$pinjam."\n";   //2
    $column_kembali = $column_kembali.$kembali."\n";  //3
    $column_nis = $column_nis.$nis."\n";  //4
   /* $column_alamat = $column_alamat.$alamat."\n"; //5
    $column_no = $column_no.$no_telepon."\n";  //6
    */

//Create a new PDF file
$pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
$pdf->Image('logo.png',25,9,-275);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(80);
$pdf->Cell(30,10,'',0,0,'C');
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(30,10,'LAPORAN DATA PEMINJAMAN',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(204,153,0);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);

$pdf->SetX(25);                             //1  -->5 sebelah kiri
$pdf->Cell(25,8,'NO',1,0,'C',1);  
        
$pdf->SetX(50);                            //2     40
$pdf->Cell(50,8,'TANGGAL PINJAM',1,0,'C',1);

$pdf->SetX(100);                            //3
$pdf->Cell(50,8,'TANGGAL KEMBALI',1,0,'C',1);

$pdf->SetX(150);                            //4
$pdf->Cell(35,8,'NIS',1,0,'C',1);



$pdf->Ln();


//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',9);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(25);
$pdf->MultiCell(25,6,$column_no,1,'C');           //1

$pdf->SetY($Y_Table_Position);
$pdf->SetX(50);
$pdf->MultiCell(50,6,$column_pinjam,1,'C');           //2      40

$pdf->SetY($Y_Table_Position);
$pdf->SetX(100);
$pdf->MultiCell(50,6,$column_kembali,1,'C');         //3

$pdf->SetY($Y_Table_Position);
$pdf->SetX(150);
$pdf->MultiCell(35,6,$column_nis,1,'C');         //4
/*
$pdf->SetY($Y_Table_Position);
$pdf->SetX(140);
$pdf->MultiCell(30,6,$column_alamat,1,'L');          //5

$pdf->SetY($Y_Table_Position);
$pdf->SetX(170);
$pdf->MultiCell(35,6,$column_no,1,'C');              //6
*/
$pdf->Output();
?>