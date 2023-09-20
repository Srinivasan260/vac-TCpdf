<?php
require_once('tcpdf/tcpdf.php');

// Create a new PDF instance
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('IPD Details PDF');



$pdf->SetPrintHeader(false);

// Add a page
$pdf->AddPage();

// Set font and font size
$pdf->SetFont('times', '', 20);

// set color
$pdf->SetTextColor(0, 0, 128);


$pdf->SetLeftMargin(20); 
$pdf->Cell(0, 10, 'MND', 0, 1, 'L');


// health Care


$pdf->SetFont('helvetica', '', 17);

$pdf->SetTextColor(0, 128, 0);
$pdf->SetLeftMargin(20); 
$pdf->Cell(0, 10, 'Health Care', 0, 1, 'L');

$pdf->SetFont('helvetica', '', 10);

$pdf->SetTextColor(0, 0, 0);
// Define the content as an HTML table
$content = '
<table border="1" style="padding: 5px;">

<tr>
<td colspan="2" style="color: red;"><b>**Note: 6 hours fasting is mandatory before admission.</b></td>
</tr>
<tr>
<td colspan="2"><b>IPD Details</b></td>
</tr>
<tr>
<td style="color: #2554C7;">Ipd Id</td>
<td>MND00013</td>
</tr>
<tr>
<td style="color: #2554C7;">Patient Name</td>
<td>Mekala Sabesh Rao</td>
</tr>
<tr>
<td style="color: #2554C7;">Medical Coordinator</td>
<td>Naveen Kumar N</td>
</tr>
<tr>
<td  style="color: #2554C7;">Doctor Name</td>
<td>Dr. Deepak Kumar Maharana</td>
</tr>
<tr>
<td  style="color: #2554C7;">Treatment</td>
<td>Varicose Veins</td>
</tr>
<tr>
<td  style="color: #2554C7;">Hospital Name</td>
<td>Secundrabad Vascular and Cosmetic Hospital</td>
</tr>
<tr>
<td style="color: #2554C7;">Address</td>
<td>Picket Road, Aoc Road, Secundrabad</td>
</tr>
<tr>
<td style="color: #2554C7;">Location</td>
<td>FG32+V9 Secunderabad, Telangana</td>
</tr>
<tr>
<td style="color: #2554C7;">Surgery Date</td>
<td>10 Sep, 2023</td>
</tr>
<tr>
<td style="color: #2554C7;">Arrival Time at the Center</td>
<td>10:00 AM</td>
</tr>
<tr>
<td style="color: #2554C7;">Treatment Time</td>
<td>11:00 AM</td>
</tr>
<tr>
<td style="color: #2554C7;">Test</td>
<td>As per doctor</td>
</tr>
<tr>
<td style="color: #2554C7;">Attendant</td>
<td>Family Member</td>
</tr>
<tr>
<td style="color: #2554C7;">Payment Type</td>
<td>Cash</td>
</tr>
<tr>
<td style="color: #2554C7;">Copay</td>
<td>NIL</td>
</tr>
<tr>
<td style="color: #2554C7;">Hospital Room Category</td>
<td>Single Private</td>
</tr>
<tr>
<td style="color: #2554C7;">Billing Amount</td>
<td>40000/-</td>
</tr>
</table>
';

// Add the HTML table to the PDF
$pdf->writeHTML($content, true, false, true, false, '');

// Output the PDF as a file (e.g., 'ipd_details.pdf')
$pdf->Output('ipd_details.pdf', 'I');

// Exit the script
exit;
?>
