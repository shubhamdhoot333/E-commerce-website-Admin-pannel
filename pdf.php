<?php
error_reporting(0);
require('pdf/fpdf.php');
	$id=$_GET['value'];

$conn=mysqli_connect('localhost','root','','subu');
$query=mysqli_query($conn,"select * from order_table where Invoice_no='$id' ");
$data=mysqli_fetch_array($query);
$name=$data['name'];
$id=$data['Invoice_no'];
$date=$data['date1'];
$address=$data['address'];
$quantity=$data['quantity'];
$cost=$data['cost'];
$email=$data['email'];
$phone=$data['Phone'];
$user=$data['uname'];
$pid=$data['product_id'];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->SetFillColor(230,230,255);
$pdf->SetDrawColor(50,50,255);
$pdf->Cell(180,23,'Tax invoice/Bill of Supply/Cash memo',1,0,'',true);
$pdf->Ln(15);
$pdf->SetFont('Arial','',10);
$pdf->Cell(40,10,'Invoice no:'. $id );
$pdf->Cell(40,10,'Date:'.$date);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Sold By:Jay Shree Shyam');
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->Cell(40,10,'H-178 bhoranada,jodhpur,	Rajasthan');
$pdf->Ln(5);
$pdf->Cell(40,10,'Pin: 342012 ');
$pdf->Ln(5);
$pdf->Cell(40,10,'PAN:AC0PL2356L ');
$pdf->Ln(5);
$pdf->Cell(40,10,'GSTIN:08acqpl2356l1z2');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,10,'Billing Address:');
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->Cell(40,10,'Client Name :'.$user);
$pdf->Ln(5);
$pdf->Cell(40,10,'Address:'.$address);
$pdf->Ln(5);
$pdf->Cell(40,10,'Email:'.$email);
$pdf->Ln(5);
$pdf->Cell(40,10,'Phone Number:'.$phone);
$pdf->Ln(20);
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(230,230,255);
$pdf->SetDrawColor(50,50,255);
$pdf->Cell(50,10,'ITEM',1,0,'',true);
$pdf->Cell(50,10,'Product Id',1,0,'',true);
$pdf->Cell(50,10,'QUANTITY',1,0,'',true);
$pdf->Cell(50,10,'COST',1,0,'',true);

$pdf->Ln(8);
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,$name ,1,0,'',true);
$pdf->Cell(50,10,$pid ,1,0,'',true);
$pdf->Cell(50,10,$quantity ,1,0,'',true);
$pdf->Cell(50,10,$cost,1,0,'',true );

$pdf->Ln(20);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,10,'Declaration:');
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->Cell(40,10,'We declare that this invoice shows the actual price of the                                  * This is a computer generated invoice');
$pdf->Ln(5);
$pdf->Cell(40,10,'goods described above and that all particulars are true and correct.                      and does not require a physical signature');
$pdf->Ln(5);
$pdf->Cell(40,10,'The goods sold are intended for end user consumption and not for resale.');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,10,'Customer Acknowledgement:');
$pdf->Ln(5);

$pdf->SetFont('Arial','',10);
$pdf->Cell(40,10,'It confirm that the products are being purchased for customer internal/personal consumption and not for re-sale.');

$pdf->Output();


?>