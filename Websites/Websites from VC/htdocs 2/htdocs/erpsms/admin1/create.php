<?php 
require_once('config/lang/eng.php');
require_once('tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 017');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 017', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 20);

// add a page
$pdf->AddPage();

$pdf->Write(0, 'Student Information', '', 0, 'L', true, 0, false, false, 0);

$pdf->Ln(5);

$pdf->SetFont('times', '', 12);

// create columns content
// create columns content
$left_column = '[LEFT COLUMN] student id left column left column left column left column left column left column left column '."\n";

$right_column = '[RIGHT COLUMN] right column right column right column right column right column right column right column right'."\n";

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

// set color for background
$pdf->SetFillColor(255, 255, 200);

// set color for text
$pdf->SetTextColor(0, 63, 127);

// write the first column
$pdf->MultiCell(80, 0, $left_column, 1, 'J', 1, 0, '', '', true, 0, false, true, 0);

// set color for background
$pdf->SetFillColor(215, 235, 255);

// set color for text
$pdf->SetTextColor(127, 31, 0);

// write the second column
$pdf->MultiCell(80, 0, $right_column, 1, 'J', 1, 1, '', '', true, 0, false, true, 0);

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_017.pdf', 'I');

//============================================================+
// END OF FILE                                                
//============================================================+




//======================before code 


# Catch the posted data, validate by getting rid of > and < 
$header =$_POST['header']; 
$std_birth_place =$_POST['std_birth_place']; 
$std_email =$_POST['std_email']; 
# Replace > and < with a blank space 
$header = str_replace('<','',$header); 
$header = str_replace('>','',$header); 
$body =$_POST['body']; 
# Replace > and < with a blank space 
$body = str_replace('<','',$body); 
$body = str_replace('>','',$body); 

# Include the file that does all of the work 
include ('class.ezpdf.php'); 

# Start a new PDF file 
$pdf =& new Cezpdf(); 

# Add the Contest's JPG to the PDF and place it in a specific position 
# This particular command requires you to have the PHP GD Library. 
$pdf->addJpegFromFile('f.jpg',199,$pdf->y-200,200,0); 

# Select the font we'll be using. There are more fonts in the zip file. 
$pdf->selectFont('./fonts/Helvetica.afm'); 

# include the header, then move down a couple of lines, font size 25 
# justification centered (centred if you're from the UK) 
$pdf->ezText($header . "\n\n",10,array('justification'=>'centre'));

$pdf->ezText($std_birth_place . "\n\n",10,array('justification'=>'left')); 
$pdf->ezText($std_birth_place . "\n\n",10,array('justification'=>'right')); 
# include the body after moving down 7 lines to get under the pic. 
# Font size 16, justification centered. 
$pdf->ezText("\n\n\n\n\n\n\n" . $body,16,array('justification'=>'centre')); 

#create the pdf and stream it to the page 
$pdf->output(); 
$pdf->ezStream(); 
?> 