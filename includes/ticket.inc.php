<?php


if (isset($_POST['register'])) {

        require 'dbh.inc.php';
        require('../fpdf182/fpdf.php'); 

        $sport =  $_POST['sport'];
        $sportdate =  $_POST['date'];
        $email =  $_POST['email'];
        $fname =  $_POST['firstname'];
        $lname =  $_POST['lastname'];
        $number =  $_POST['number'];
        $address =  $_POST['address'];
        $payment =  $_POST['paymentType'];
        

        if (empty($sport) || empty($sportdate) || empty($email) || empty($fname) || empty($lname) || empty($number) || empty($address) || empty($payment))  {
            header("Location: ../ticketconfirmation.php?error=emptyfields&sport=".$sport."&sportdate=".$sportdate."&specatatorEmail=".$spectatorEmail."&fname=".$fname."&lname=".$lname."&number=".$number."&address=".$address."&payment=".$payment);
            exit();

        }

        else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $fname) && !preg_match("/^[a-zA-Z]*$/", $name)) {
            header("Location: ../ticketconfirmation.php?error=invalid&email");
            exit();
        }

        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../ticketconfirmation.php?error=invalid&fname=".$fname."&lname=".$lname);
            exit();
        }

        else if (!preg_match("/^[a-zA-Z]*$/", $fname)) {
            header("Location: ../ticketconfirmation.php?error=invalidfname=".$email."&lname=".$lastname);
            exit();
        }

        else if (!preg_match("/^[a-zA-Z]*$/", $lname)) {
            header("Location: ../ticketconfirmation.php?error=invalidlname=".$email."&lname=".$firstname);
            exit();
        }


        else {

            $sql = "SELECT * FROM ticket;";
            $result =mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 26) {

            header("Location: ../ticketconfirmation.php?error=toomanyusers");
            exit();
        } 

    else {
        $sql = "INSERT INTO ticket (sport, sportdate, email, fname, lname, number, Address, payment) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../ticketconfirmation.php?error=sqlerror2");
        exit();
        }
    
        else {
            
            mysqli_stmt_bind_param($stmt, "ssssssss" , $sport, $sportdate, $email, $fname, $lname, $number, $address, $payment );
                mysqli_stmt_execute($stmt);
              
  

  
// New object created and constructor invoked 
$pdf = new FPDF(); 
  
// Add new pages. By default no pages available. 
$pdf->AddPage(); 



// Set it new line 
$pdf->Ln();
  
// Set font format and font-size 
$pdf->SetFont('Times', 'B', 20); 
  
// Framed rectangular area 
$pdf->Cell(176, 5, 'Receipt', 0, 0, 'C'); 
  
$pdf->Image('../images/logo.png', 30, 8, 20); 

// Set it new line 
$pdf->Ln(); 

  
// Set font format and font-size 
$pdf->SetFont('Times', 'B', 12); 
  
// Framed rectangular area 
$pdf->Cell(176, 10, 'City of Yokyo Fun Olympic Games', 0, 0, 'C'); 
 
// Set it new line 
$pdf->Ln(); 

// Set it new line 
$pdf->Ln(); 
  
// Set font format and font-size 
$pdf->SetFont('Times', '', 12); 
  
// Framed rectangular area 
$pdf->Cell(176, 10, 'Sport: '. $sport, 0, 0, ''); 
 
// Set it new line 
$pdf->Ln(); 
  
// Set font format and font-size 
$pdf->SetFont('Times', '', 12); 
  
// Framed rectangular area 
$pdf->Cell(176, 10, 'Day of event: '. $sportdate, 0, 0, '');
// Close document and sent to the browser 

// Set it new line 
$pdf->Ln(); 
  
// Set font format and font-size 
$pdf->SetFont('Times', '', 12); 
  
// Framed rectangular area 
$pdf->Cell(176, 10, 'Email: '. $email, 0, 0, '');

// Set it new line 
$pdf->Ln(); 
  
// Set font format and font-size 
$pdf->SetFont('Times', '', 12); 
  
// Framed rectangular area 
$pdf->Cell(176, 10, 'Firstname: '. $fname, 0, 0, '');

// Set it new line 
$pdf->Ln(); 
  
// Set font format and font-size 
$pdf->SetFont('Times', '', 12); 
  
// Framed rectangular area 
$pdf->Cell(176, 10, 'Lastname: '. $lname, 0, 0, '');

// Set it new line 
$pdf->Ln(); 
  
// Set font format and font-size 
$pdf->SetFont('Times', '', 12); 
  
// Framed rectangular area 
$pdf->Cell(176, 10, 'Contact Number: '. $number, 0, 0, '');

// Set it new line 
$pdf->Ln(); 
  
// Set font format and font-size 
$pdf->SetFont('Times', '', 12); 
  
// Framed rectangular area 
$pdf->Cell(176, 10, 'Postal Address: '. $address, 0, 0, '');

// Set it new line 
$pdf->Ln(); 
  
// Set font format and font-size 
$pdf->SetFont('Times', '', 12); 
  
// Framed rectangular area 
$pdf->Cell(176, 10, 'Method of payment: '. $payment, 0, 0, '');


$pdf->Output(); 

// Set it new line 
$pdf->Ln();
        
        
            exit();

        }
        }

    }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
  
        
else {
    header("Location: ../ticketconfirmation.php");
    exit();

}
        