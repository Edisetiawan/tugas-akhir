<?php
include "conn.php";
require('fpdf17/fpdf.php');

//Menampilkan data dari tabel di database

$result=mysql_query("SELECT *
FROM
    buku
    INNER JOIN buku_detail 
        ON (buku.buku_id = buku_detail.buku_id)
    INNER JOIN penerbit 
        ON (buku.penerbit_kode = penerbit.penerbit_kode)
    INNER JOIN klasifikasi 
        ON (buku.klasifikasi_id = klasifikasi.klasifikasi_id)
    INNER JOIN rak 
        ON (rak.rak_lokasi = buku_detail.rak_lokasi) limit 35") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_kode = "";
$column_judul = "";
$column_isbn = "";
$column_penerbit = "";
$column_klasifikasi = "";
$column_status = "";


//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
	$kode = $row["bukdet_kode"];    //1
    $judul = $row["buku_judul"];   //2
    $isbn = $row["buku_isbn"];  //3
    $penerbit = $row["penerbit_nama"];  //4
    $klasifikasi = $row["klasifikasi_nama"];  //5
	$status = $row["bukdet_status"];  //6
    
    if($status == 2){
        $status1='dipinjam';
    }else{
        $status1='tersedia';
    }    
	$column_kode = $column_kode.$kode."\n";   //1
    $column_judul = $column_judul.$judul."\n";   //2
    $column_isbn = $column_isbn.$isbn."\n";  //3
    $column_penerbit = $column_penerbit.$penerbit."\n";  //4
    $column_klasifikasi = $column_klasifikasi.$klasifikasi."\n"; //5
    $column_status = $column_status.$status1."\n";  //6
    

//Create a new PDF file
$pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
$pdf->Image('logo.png',5,11,-275);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(80);
$pdf->Cell(30,10,'',0,0,'C');
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(30,10,'LAPORAN DATA BUKU',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(204,153,0);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',8);
$pdf->SetY($Y_Fields_Name_position);

$pdf->SetX(5);                             //1  -->5 sebelah kiri
$pdf->Cell(21,8,'KODE BUKU',1,0,'C',1);  
        
$pdf->SetX(25);                            //2     40
$pdf->Cell(35,8,'JUDUL',1,0,'C',1);

$pdf->SetX(60);                            //3
$pdf->Cell(35,8,'ISBN',1,0,'C',1);

$pdf->SetX(90);                            //4
$pdf->Cell(25,8,'PENERBIT',1,0,'C',1);

$pdf->SetX(115);                           //5
$pdf->Cell(65,8,'KLASIFIKASI',1,0,'C',1);

$pdf->SetX(180);                           //6
$pdf->Cell(25,8,'STATUS',1,0,'C',1);

$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',8);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(20,6,$column_kode,1,'C');           //1

$pdf->SetY($Y_Table_Position);
$pdf->SetX(25);
$pdf->MultiCell(35,6,$column_judul,1,'L');           //2      40

$pdf->SetY($Y_Table_Position);
$pdf->SetX(60);
$pdf->MultiCell(30,6,$column_isbn,1,'C');         //3

$pdf->SetY($Y_Table_Position);
$pdf->SetX(90);
$pdf->MultiCell(25,6,$column_penerbit,1,'C');         //4

$pdf->SetY($Y_Table_Position);
$pdf->SetX(115);
$pdf->MultiCell(65,6,$column_klasifikasi,1,'C');          //5

$pdf->SetY($Y_Table_Position);
$pdf->SetX(180);
$pdf->MultiCell(25,6,$column_status,1,'C');              //6

$pdf->Output();
?>