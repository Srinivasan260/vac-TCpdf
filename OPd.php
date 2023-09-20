<?php
// Include the TCPDF library
require_once('tcpdf/tcpdf.php');

// Create a new PDF instance
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Sample PDF Document');

$pdf->SetPrintHeader(false);

// Add a page
$pdf->AddPage();


// // Set font
// $pdf->SetFont('helvetica', '', 20);
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



$pdf->SetTextColor(0, 0, 0); // Set text color to black
$pdf->SetFont('helvetica', '', 10);

// Define the OPD details as an associative array
$opdDetails = array(
    
    'Opd Id' => 'MNDOP0001',
    'Patient Name' => 'Praveen Kumar',
    'Medical Coordinator' => 'Naveen Kumar N',
    'Doctor Name' => 'Dr. Nibedita Parida',
    'Treatment' => 'Lipoma',
    'Hospital Name' => 'Secundrabad Vascular and Cosmetic Hospital',
    'Address' => 'Picket Road, West Maredpally, Secundrabad.',
    'Location' => 'FG32+V9 Secunderabad, Telangana',
    'Appointment Date' => '10 Sep, 2023',
    'Appointment Time at the center' => '10:00 AM',
    'Fee' => '0'
);

// Create an HTML table with the OPD details
$html = '<table border="1" cellpadding="5">';
$html .= '<tr>';
$html .= '<th colspan="2">OPD Details</th>';
$html .= '</tr>';
foreach ($opdDetails as $label => $value) {
    $html .= '<tr>';
    $html .= '<th>' . $label . '</th>';
    $html .= '<td>' . $value . '</td>';
    $html .= '</tr>';
}
$html .= '</table>';

// Add the HTML table to the PDF using WriteHTML
$pdf->WriteHTML($html);


$pdf->Output('pdf_with_html_content.pdf', 'I'); 

// Exit the script
exit;
?>
